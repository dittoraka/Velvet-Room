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
Route::get('achievement', 'achiev_controller@loadachiev');
Route::get('profiles', 'friend_controller@tampilin')->name('profilorang');
Route::get('showMessage', 'friend_controller@tampilinMessage');
Route::get('discussion', 'master_controller@juduldis')->name('discus');
Route::get('getdiscussion', 'master_controller@detaildis')->name('detdis');
Route::get('searchnav','master_controller@searchnav');
Route::get('komen','post_controller@ngomen');
Route::get('diskusi','master_controller@komendis');
Route::get('deletekomendis','master_controller@deletekomen');
Route::get('deletekomenpost','post_controller@deletekomen');
Route::get('deletedis','master_controller@deletedis');
Route::get('deletepost','post_controller@deletepost');
Route::get('editpost','post_controller@editpost');
Route::post('ngeditpost','post_controller@ngeditpost');
Route::get('reportpost','admin_controller@ngereportpost');
Route::post('reportposting','admin_controller@reportpost');
Route::get('reportdis','admin_controller@reportdis');
Route::post('ngereportdis','admin_controller@ngereportdis');
Route::get('messages', function () {
    return view('user.messages');
});
Route::get('my-profile-feed', 'post_controller@loadpostprofil')->name('profil');
Route::get('user-profile', 'friend_controller@liatuser');
Route::get('show-chat', 'friend_controller@liatchat');
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
Route::any('/group','group_controller@load_group')->name('group');
Route::get('/tambahteman', 'friend_controller@addfriend');
Route::get('/hapusteman', 'friend_controller@delfriend');
Route::any('/ngelike','master_controller@likee');
Route::any('/discuss_report','admin_controller@discuss_report');
Route::any('/detailpost','admin_controller@detailpost');
Route::any('/admincarimangsa','admin_controller@searchorang');
Route::any('/admindeletepost','admin_controller@admindeletepost');
Route::any('/admindeletediss','admin_controller@admindeletediss');
Route::any('/post_report','admin_controller@post_report');
Route::any('/postlike','post_controller@likee');
Route::post('/gantipass', 'admin_controller@gantipass');
Route::post('/posting', 'post_controller@ngepost');
Route::post('/gantifoto', 'post_controller@ganti');
Route::post('/gantiback', 'post_controller@gantiback');
Route::any('/process','login_controller@store');
Route::any('/adminhome','admin_controller@load')->name('adminhome');
Route::any('/updateuser','admin_controller@update');
Route::any('/loaddelete','admin_controller@loaddelete');
Route::any('/deleteuser','admin_controller@delete');
Route::any('/masuk','login_controller@login');
Route::any('/send-chat','friend_controller@sendChat');
Route::any('/bikingroup','group_controller@tambah');
Route::any('/joingroup','group_controller@join_group');
Route::any('/detailgroup','group_controller@detail_group')->name('detail');
Route::any('/grouppost','group_controller@ngepost');
Route::any('/ngomen','group_controller@ngomen');
//punya avatar
Route::any('/simpan_avatar','avatar_controller@save');

Route::view('/ava','user.avatar');



