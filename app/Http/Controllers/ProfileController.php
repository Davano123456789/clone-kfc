<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile() {
        $profile = Profile::all();
        return view('profile',['profile'=>$profile]);
        
    }
    public function detailProfile($id) {
        $profile = Profile::all();
        $profileDetail = Profile::findOrFail($id);
        return view('detailProfile',['profileDetail'=>$profileDetail,'profile'=>$profile]);
        
    }
    public function listProfile(Request $request)
    {
        $keyword = $request->keyword; // Mulai dengan query kosong
        $profile = Profile::where('title','LIKE','%'.$keyword.'%')
                            ->orWhere('description','LIKE','%'.$keyword.'%')
                            ->paginate(5);
    
       
        // Paginasi setelah query dibangun
    
        return view('listProfile', ['profile' => $profile]);



    }
    public function addProfile() {
       
        return view('addProfile');
    }
    public function storeProfile(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
       
        ]);

        Profile::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('listProfile')->with('success', 'News berhasil ditambahkan');
    }
    public function deleteProfile($id)  {
        $profile = Profile::findOrFail($id);
        if ($profile) {
            $profile->delete();
            return redirect()->route('listProfile')->with('success', 'profile berhasil dihapus');
        }
        return redirect('listProfile')->with('error', 'profile tidak ditemukan');
    }
}
