<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\BlockController;


Route::get('/clear-cache', function () {
   $exitCode = Artisan::call('config:clear');
   $exitCode = Artisan::call('cache:clear');
   $exitCode = Artisan::call('config:cache');
   return 'DONE'; //Return anything
});

Route::get('/migrate', function () {
   $exitCode = Artisan::call('migrate');
   return 'DONE'; //Return anything
});

Route::get('/routeList', function () {
   $exitCode = Artisan::call('route:list');
   return Artisan::output(); //Return anything
});

Route::get('/seed', function () {
   $exitCode = Artisan::call('db:seed');
   return 'DONE'; //Return anything
});

//create symbolic link for storage
Route::get('/symlink', function () {
   return view('symlink');
});  

Route::get('/', function () {
    return view('index');
});

Route::get('/signin', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::resource('/music', MusicController::class);
Route::resource('/merch', MerchController::class);
Route::resource('/video', VideoController::class);
Route::resource('/photo', PhotoController::class);
Route::resource('/audio', AudioController::class);

// Route::resource('/live', LivestreamController::class);
Route::resource('/market', MarketController::class);


Route::post('getFriends', 'HomeController@getFriends');
Route::post('/session/create', 'SessionController@create');
Route::post('/session/{session}/chats', 'ChatController@chats');
Route::post('/session/{session}/read', 'ChatController@read');
Route::post('/session/{session}/clear', 'ChatController@clear');
Route::post('/session/{session}/block', 'BlockController@block');
Route::post('/session/{session}/unblock', 'BlockController@unblock');
Route::post('/send/{session}', 'ChatController@send');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/profile', 'HomeController@profile')->name('profile');

Route::get('/profile', 'HomeController@profile');

// Route::post('storeImage', [RegisterController::class, 'storeImage'])->name('storeImage');

Route::get('search', function () {
    return view('authh.pages.search');
});

Route::get('home', function () {
    return view('authh.pages.home');
});

Route::get('livestreams', function () {
    return view('authh.pages.livestreams');
});

// Route::get('marketplace', function () {
//     return view('authh.pages.marketplace');
// });

Route::get('chat', function () {
    return view('authh.pages.chat');
});

Route::get('subscribe', function () {
    return view('authh.pages.subscribe');
});

Route::get('setting', function () {
    return view('authh.pages.settings');
});



