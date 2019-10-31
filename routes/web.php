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
});
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
});




