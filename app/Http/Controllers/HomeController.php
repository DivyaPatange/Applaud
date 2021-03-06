<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function profile()
    {
        return view('authh.pages.profile');
    }

    public function getFriends()
    {
        return UserResource::collection(User::where('id','!=', auth()->id())->get());
    }
}
