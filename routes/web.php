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
Route::get('home','post_controller@loadpost')->name('halaman');
Route::get('postdis','post_controller@postdiss');
Route::get('achievement', function () {
    return view('user.achievement');
});
Route::get('profiles', 'friend_controller@tampilin');
Route::get('discussion', 'master_controller@juduldis')->name('discus');
Route::get('getdiscussion', 'master_controller@detaildis');
Route::get('messages', function () {
    return view('user.messages');
});
Route::get('my-profile-feed', 'post_controller@loadpostprofil');
Route::get('user-profile', 'friend_controller@liatuser');
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
Route::any('/group','master_controller@opengroup');
Route::get('/tambahteman', 'friend_controller@addfriend');
Route::get('/posting', 'post_controller@ngepost');
Route::any('/process','login_controller@store');
Route::any('/adminhome','admin_controller@load')->name('adminhome');
Route::any('/updateuser','admin_controller@update');
Route::any('/loaddelete','admin_controller@loaddelete');
Route::any('/deleteuser','admin_controller@delete');
Route::any('/masuk','login_controller@login');
//punya avatar
Route::any('/simpan_avatar','avatar_controller@save');

Route::view('/ava','user.avatar');



