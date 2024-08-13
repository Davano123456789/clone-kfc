<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function news(){
        $news = News::all();
        return view('news',['news'=>$news]);
        
    }
    public function listNews(){
        $news = News::all();
        return view('listNews',['news'=> $news]);
        
    }
    public function addNews(){
       return view('addNews');
        
    }
    public function storeNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id(),
            'image' => $imageName,
        ]);

        return redirect()->route('listNews')->with('success', 'News berhasil ditambahkan');
    }
    public function deleteNews($id){
        $news = News::findOrFail($id);
        if ($news) {
            $news->delete();
            return redirect()->route('listNews')->with('success', 'news berhasil dihapus');
        }
        return redirect('listNews')->with('error', 'news tidak ditemukan');
   
        
    }

    public function detailNews($id) {
        $news = News::findOrFail($id);
        return view('detailNews',['news'=>$news]);
        
    }
    public function editNews($id) {
        $news = News::findOrFail($id);
        return view('editNews',['news'=>$news]);
        
    }
    public function editedNews(Request $request,$id)  {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $news = News::findOrFail($id);
           

                $news->title = $request->title;
                $news->description = $request->description;
        
                if ($request->hasFile('image')) {
                    $imageName = time().'.'.$request->image->extension();
                    $request->image->move(public_path('images'), $imageName);
                    $news->image = $imageName;
                }
        
                $news->save();
        
                return redirect('listNews')->with('success', 'Menu berhasil diupdate');
           
        
            }
}
