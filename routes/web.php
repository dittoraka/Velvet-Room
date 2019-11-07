<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::prefix('users')->group(function () {
    
});
Route::get('home', function () {
    return view('user.home');
})->name('halaman');
Route::get('achievement', function () {
    return view('user.achievement');
});
Route::get('profiles', function () {
    return view('user.profiles');
});
Route::get('discussion', function () {
    return view('user.discussion');
});
Route::get('messages', function () {
    return view('user.messages');
});
Route::get('my-profile-feed', function () {
    return view('user.my-profile-feed');
});
Route::get('user-profile', function () {
    return view('user.user-profile');
});
Route::get('profile-account-setting', function () {
    return view('user.profile-account-setting');
});
Route::get('forum', function () {
    return view('user.forum');
});
Route::get('login', function () {
    return view('login');
})->name('loginuser');

Route::get('admin', function () {
    return view('admin.home');
})->name('rumahadmin');
Route::any('/process','login_controller@store');
Route::any('/adminhome','admin_controller@load')->name('adminhome');
Route::any('/updateuser','admin_controller@update');
Route::any('/hapususer','admin_controller@delete');
Route::any('/deleteuser','admin_controller@loaddelete');
Route::any('/masuk','login_controller@login');



