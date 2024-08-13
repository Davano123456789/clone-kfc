<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function event()  {
        $event = Event::all();
        return view('event',['event'=>$event]);
        
    }
    public function listEvent()  {
        $event = Event::all();
        return view('ListEvent',['event'=>$event]);
    }
    public function addEvent()  {
        return view('addEvent');
    }
    public function editEvent($id)  {
        $event = Event::findOrFail($id);
        return view('editEvent',['event'=>$event]);
    }
    public function deleteEvent($id)  {
        $news = Event::findOrFail($id);
        if ($news) {
            $news->delete();
            return redirect()->route('listEvent')->with('success', 'event berhasil dihapus');
        }
        return redirect('listEvent')->with('error', 'event tidak ditemukan');
    }
    public function storeEvent(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id(),
            'image' => $imageName,
        ]);

        return redirect()->route('listEvent')->with('success', 'Event berhasil ditambahkan');
    }
    public function editedEvent(Request $request,$id)  {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $event = Event::findOrFail($id);
           

                $event->title = $request->title;
        
                if ($request->hasFile('image')) {
                    $imageName = time().'.'.$request->image->extension();
                    $request->image->move(public_path('images'), $imageName);
                    $event->image = $imageName;
                }
        
                $event->save();
        
                return redirect('listEvent')->with('success', 'Event berhasil diupdate');
           
        
            }
    
    
}
