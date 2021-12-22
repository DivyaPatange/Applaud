<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\Music;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('music.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            // 'price' => 'numeric',
            'artist' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
            'tag' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
            'title' => 'required',
            'publisher' => 'required',
            'composer' => 'required',
            'date' => 'required',
            'category' => 'required',
            'license' => 'required',
            // 'cover' => 'required',
            // 'file' => 'required|mimes:mp3,mp4',
            // 'logo' => 'required',
        ]);

        $category = new Music();
        $category->option = $request->option;
        $category->price = $request->price ?? 'free';
        $category->artist = $request->artist;
        $category->tag = $request->tag;
        $category->title = $request->title;
        $category->publisher = $request->publisher;
        $category->composer = $request->composer;
        $category->date = $request->date;
        $category->category = $request->category;
        $category->license = $request->license;
 
        $file1 = $request->file('cover_img');
        $path = public_path().'/Img/Music/cover/';
            //upload new file
            $file1 = $request->cover_img;
            $filename = $file1->getClientOriginalName();
            $file1->move($path, $filename);
        $category->cover_img =$filename;

        $file2 = $request->file('file_img');
        $path = public_path().'/Img/Music/file/';
            //upload new file
            $file2 = $request->file_img;
            $filename = $file2->getClientOriginalName();
            $file2->move($path, $filename);
        $category->file_img =$filename;

        $file3 = $request->file('logo_img');
        $path = public_path().'/Img/Music/logo/';
            //upload new file
            $file3 = $request->logo_img;
            $filename = $file3->getClientOriginalName();
            $file3->move($path, $filename);
        $category->logo_img =$filename;

        $category->save();
        return redirect('/music/create')->with('success' ,'Music Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(Music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Music $music)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(Music $music)
    {
        //
    }
}
