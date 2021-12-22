<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\Photo;
use Illuminate\Http\Request;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo = Photo::all();
        return view('photo.index', compact('photo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photo.create');
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
            'creator' => 'required|max:255',
            'tag' => 'required|max:255',
            'title' => 'required|max:255',
            'publisher' => 'required|max:255',
            'photographer' => 'required',
            
            'date' => 'required',
            
            'category' => 'required',
            'license' => 'required',
        ]);

        $category = new Photo();
        $category->option = $request->option;
        $category->price = $request->price ?? 'free';
        $category->creator = $request->creator;
        $category->tag = $request->tag;
        $category->title = $request->title;
        $category->publisher = $request->publisher;
        $category->photographer = $request->photographer;
        $category->date = $request->date;
        $category->category = $request->category;
        $category->license = $request->license;
        
 
        $file1 = $request->file('photo_img');
        $path = public_path().'/Img/Photo/';
            //upload new file
            $file1 = $request->photo_img;
            $filename = $file1->getClientOriginalName();
            $file1->move($path, $filename);
        $category->photo_img =$filename;

        $category->save();
        return redirect('/photo/create')->with('success' ,'Photo Added Successfully!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
