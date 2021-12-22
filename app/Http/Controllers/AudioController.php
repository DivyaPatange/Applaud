<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\Audio;
use Illuminate\Http\Request;


class AudioController extends Controller
{

    public function index()
    {
            $audio = Audio::all();
            return view('audio.index', compact('audio'));
    }

    
    public function create()
    {
        return view('audio.create');
    }

   
    public function store(Request $request)
    {
         $request->validate([
            // 'price' => 'numeric',
            'creator' => 'required',
            'tag' => 'required',
            'title' => 'required',
            'publisher' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
            'audiographer' => 'required',
            'date' => 'required',
            'category' => 'required',
            'license' => 'required',
            // 'cover' => 'required',
            // 'file' => 'required|mimes:mp3,mp4',
            // 'logo' => 'required',
        ]);

        $category = new Audio();
        $category->option = $request->option;
        $category->price = $request->price ?? 'free';
        $category->creator = $request->creator;
        $category->tag = $request->tag;
        $category->title = $request->title;
        $category->publisher = $request->publisher;
        $category->audiographer = $request->audiographer;
        $category->date = $request->date;
        $category->category = $request->category;
        $category->license = $request->license;
        
 
        $file1 = $request->file('cover_img');
        $path = public_path().'/Img/Audio/cover/';
            //upload new file
            $file1 = $request->cover_img;
            $filename = $file1->getClientOriginalName();
            $file1->move($path, $filename);
        $category->cover_img =$filename;

        $file2 = $request->file('file_img');
        $path = public_path().'/Img/Audio/file/';
            //upload new file
            $file2 = $request->file_img;
            $filename = $file2->getClientOriginalName();
            $file2->move($path, $filename);
        $category->file_img =$filename;

        $file3 = $request->file('logo_img');
        $path = public_path().'/Img/Audio/logo';
            //upload new file
            $file3 = $request->logo_img;
            $filename = $file3->getClientOriginalName();
            $file3->move($path, $filename);
        $category->logo_img =$filename;

        $category->save();
        // return "yes";
        return redirect('\audio\create')->with('success' ,'Audio Added Successfully!');
    }

    public function show(Audio $audio)
    {
        //
    }

    
    public function edit(Audio $audio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Audio $audio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Audio $audio)
    {
        //
    }
}
