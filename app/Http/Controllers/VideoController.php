<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\Video;
use Illuminate\Http\Request;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = Video::all();
        return view('video.index', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('video.create');
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
            'creator' => 'required',
            'tag' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
            'title' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
            'publisher' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
            'videographer' => 'required',
            'date' => 'required',
            'category' => 'required',
            'license' => 'required',
            // 'cover' => 'required',
            // 'file' => 'required|mimes:mp4,3gp',
            // 'logo' => 'required',
        ]);

        $category = new Video();
        $category->option = $request->option;
        $category->price = $request->price ?? 'free';
        $category->creator = $request->creator;
        $category->tag = $request->tag;
        $category->title = $request->title;
        $category->publisher = $request->publisher;
        $category->videographer = $request->videographer;
        $category->date = $request->date;
        $category->category = $request->category;
        $category->license = $request->license;
        
 
        $file1 = $request->file('cover_img');
        $path = public_path().'/Img/Video/cover/';
            //upload new file
            $file1 = $request->cover_img;
            $filename = $file1->getClientOriginalName();
            $file1->move($path, $filename);
        $category->cover_img =$filename;

        $file2 = $request->file('file_img');
        $path = public_path().'/Img/Video/file/';
            //upload new file
            $file2 = $request->file_img;
            $filename = $file2->getClientOriginalName();
            $file2->move($path, $filename);
        $category->file_img =$filename;

        $file3 = $request->file('logo_img');
        $path = public_path().'/Img/Video/logo/';
            //upload new file
            $file3 = $request->logo_img;
            $filename = $file3->getClientOriginalName();
            $file3->move($path, $filename);
        $category->logo_img =$filename;

        $category->save();
        return redirect('/video/create')->with('success' ,'Video Added Successfully!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
