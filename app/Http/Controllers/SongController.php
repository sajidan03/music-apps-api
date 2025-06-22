<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function viewCreate(){
        return view('home-create');
    }
    public function viewHome(){
        $songs = Song::all();
        return view('home-view', compact('songs'));
    }
    public function create(Request $request){
        $data = $request->validate([
            'title' => 'required|string',
            'artist' => 'required|string',
            'category' => 'required|string',
            'album' => 'nullable|string',
            'file' => 'nullable|file|mimes:mp3,wav|max:10000',
        ]);
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('songs', 'public');
            $data['file_url'] = asset('storage/'. $path);
        }
        Song::create($data);
        return redirect()->route('view-home')->with('success','Input berhasil');
    }
}
