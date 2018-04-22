<?php

namespace App\Http\Controllers;

use App\music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics=music::all();
        return view('music.index',compact('musics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('music.formmusic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      $music = new music;

        $this->validate($request,[

            'title' => 'required|string',
            'genre' => 'required|string',
            'singer' => 'required|string',
            'song_writer' => 'required|string',
        ]);
        
        $music->title = $request->title;
        $music->genre = $request->genre;
        $music->singer = $request->singer;
        $music->song_writer = $request->song_writer;
      
        $music->save();
        return redirect('/music');
       // music::store($music->id);
       // return redirect()->route('music.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, music $music)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(music $music)
    {
        //
    }
}
