<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Type;
use Illuminate\Http\Request;

class MenuController extends Controller
{

  // MenuController.php

public function listMenu(Request $request)
{
    $query = Menu::with('type');
    $type = Type::all();
       // Filter berdasarkan jenis menu
       if ($request->has('menuType') && $request->menuType != 'all') {
        $query->where('type_id', $request->menuType);
    }

    if($request->has('table_search')) {
        $search = $request->input('table_search');
        $query->where('name', 'like', "%$search%")
              ->orWhere('description', 'like', "%$search%")
              ->orWhereHas('type', function($q) use ($search) {
                  $q->where('name', 'like', "%$search%");
              });
    }
    
    $menu = $query->paginate(10);
    
    return view('listMenu', compact('menu','type'));
}

    public function menu() {
        $spesial = Menu::where('type_id',1)->get();
        $spesialCombo = Menu::where('type_id',2)->get();
        $spesialAlacarate = Menu::where('type_id',3)->get();
        
        return view('menu',['spesial'=>$spesial,'spesialCombo'=>$spesialCombo,'spesialAlacarate'=>$spesialAlacarate]);
        
    }
    public function show($id) {
        $menu = Menu::with('type')->findOrFail($id);
        return view('menuDetail',['menu'=>$menu]);
        
    }

    public function addData(){
        $type = Type::all();
        return  view('addData',['type'=>$type]);
        
    }
    public function listDetailMenu($id){

        $menu = Menu::with('type')->findOrFail($id);
   
        return view('listDetailMenu',['menu'=>$menu]);
        
    }
    public function deleteMenu($id){
        $menu = Menu::find($id);
        if ($menu) {
            $menu->delete();
            return redirect()->route('listMenu')->with('success', 'Menu berhasil dihapus');
        }
        return redirect('listMenu')->with('error', 'Menu tidak ditemukan');
   
        
    }
    public function editMenu($id){
        $menu = Menu::with('type')->findOrFail($id);
        $type = Type::all();
        return view('editMenu',["menu"=>$menu,'type'=>$type]);
        
    }
    public function storeData(Request $request){
        $request->validate([
            'name'=> 'required',
            'harga'=> 'required',
            'description' => 'required|string',
            'type_id' => 'required|exists:types,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        }
     Menu::create([
        'name'=>$request->name,
        'harga'=>$request->harga,
        'description'=>$request->description,
        'type_id'=>$request->type_id,
        'image' => $imageName,
     ]);
     return redirect('listMenu')->with('success', 'Data berhasil ditambahkan');
        
    }
    public function editedMenu(Request $request,$id)  {
        $request->validate([
            'name'=>'required',
            'harga'=>'required',
            'description'=>'required',
            'type_id' => 'required|exists:types,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
$menu = Menu::findOrFail($id);
        if(!$menu){
            return redirect('listMenu')->with('error', 'Menu tidak ditemukan');
        
        }
        $menu->name = $request->name;
        $menu->harga = $request->harga;
        $menu->description = $request->description;
        $menu->type_id = $request->type_id;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $menu->image = $imageName;
        }

        $menu->save();

        return redirect('listMenu')->with('success', 'Menu berhasil diupdate');
   

    }
}
