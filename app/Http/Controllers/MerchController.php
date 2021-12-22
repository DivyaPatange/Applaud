<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\Merch;
use Illuminate\Http\Request;


class MerchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merch = Merch::all();
        return view('merch.index', compact('merch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('merch.create');
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
            'price' => 'required|numeric',
            'size' => 'required',
            // 'comment' => 'required',
        ]);

        $category = new Merch();
        $category->price = $request->price;
        $category->size = $request->size;
        $category->comments = $request->comments;
 
        $file1 = $request->file('photo_img');
        $path = public_path().'/Img/Merch/';
            //upload new file
            $file1 = $request->photo_img;
            $filename = $file1->getClientOriginalName();
            $file1->move($path, $filename);
        $category->photo_img =$filename;

        $category->save();
        return redirect('/merch/create')->with('success' ,'Merch Added Successfully!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function show(Merch $merch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function edit(Merch $merch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merch $merch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merch $merch)
    {
        //
    }
}
