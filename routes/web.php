<?php

use Illuminate\Support\Facades\Route;

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
    return view('front.index');
});
Route::get('/about-us','FrontController@aboutUs')->name('about');
Route::get('/contact-us','FrontController@contactUs')->name('contact');


Route::match(['get', 'post'], 'login', 'AuthController@login')->name('login');
Route::match(['get', 'post'], 'logout', 'AuthController@logout')->name('logout');

Route::prefix('admin')->name('admin.')->middleware('role:admin')->group(function () {
    Route::get('/','AuthController@dashboard')->name('dashboard');

    Route::prefix('news')->name('news.')->group(function () {
        Route::get('/','Admin\NewsController@index')->name('index');
        Route::get('/add/','Admin\NewsController@create')->name('create');
        Route::post('/store','Admin\NewsController@store')->name('store');
        Route::get('/edit/{id}/','Admin\NewsController@edit')->name('edit');
        Route::post('/update/{id}','Admin\NewsController@update')->name('update');
        Route::get('/del/{id}/','Admin\NewsController@delete')->name('delete');
    });

    Route::prefix('notice')->name('notice.')->group(function () {
        Route::get('/','Admin\NoticeController@index')->name('index');
        Route::get('/add/','Admin\NoticeController@create')->name('create');
        Route::post('/store','Admin\NoticeController@store')->name('store');
        Route::get('/edit/{id}/','Admin\NoticeController@edit')->name('edit');
        Route::post('/update/{id}','Admin\NoticeController@update')->name('update');
        Route::get('/del/{id}/','Admin\NoticeController@delete')->name('delete');
    });

    Route::prefix('event')->name('event.')->group(function () {
        Route::get('/','Admin\EventController@index')->name('index');
        Route::get('/add/','Admin\EventController@create')->name('create');
        Route::post('/store','Admin\EventController@store')->name('store');
        Route::get('/edit/{id}/','Admin\EventController@edit')->name('edit');
        Route::post('/update/{id}','Admin\EventController@update')->name('update');
        Route::get('/del/{id}/','Admin\EventController@delete')->name('delete');
    });

    Route::prefix('member')->name('member.')->group(function () {
        Route::get('/','Admin\MemberController@index')->name('index');
        Route::get('/add/','Admin\MemberController@create')->name('create');
        Route::post('/store','Admin\MemberController@store')->name('store');
        Route::get('/edit/{id}/','Admin\MemberController@edit')->name('edit');
        Route::post('/update/{id}','Admin\MemberController@update')->name('update');
        Route::get('/del/{id}/','Admin\MemberController@delete')->name('delete');
    });

    Route::prefix('board')->name('board.')->group(function () {
        Route::get('/','Admin\BoardMemberController@index')->name('index');
        Route::get('/add/','Admin\BoardMemberController@create')->name('create');
        Route::post('/store','Admin\BoardMemberController@store')->name('store');
        Route::get('/edit/{id}/','Admin\BoardMemberController@edit')->name('edit');
        Route::post('/update/{id}','Admin\BoardMemberController@update')->name('update');
        Route::get('/del/{id}/','Admin\BoardMemberController@delete')->name('delete');
        Route::get('/manage/{id}/','Admin\BoardMemberController@manage')->name('manage');
        Route::post('/manage/member/add/','Admin\BoardMemberController@manageMember')->name('manage.member');
        Route::post('/manage/member/edit/','Admin\BoardMemberController@manageMemberedit')->name('manage.member.edit');
        Route::post('/manage/member/del/','Admin\BoardMemberController@manageMemberDel')->name('manage.member.del');
    });

    // Route::prefix('commitee')->name('commitee.')->group(function () {
    //     Route::get('/','Admin\CommiteeController@index')->name('index');
    //     Route::get('/add/','Admin\CommiteeController@create')->name('create');
    //     Route::post('/store','Admin\CommiteeController@store')->name('store');
    //     Route::get('/edit/{id}/','Admin\CommiteeController@edit')->name('edit');
    //     Route::post('/update/{id}','Admin\CommiteeController@update')->name('update');
    //     Route::get('/del/{id}/','Admin\CommiteeController@delete')->name('delete');
    // });

    Route::prefix('gallery')->name('gallery.')->group(function () {
        Route::get('/','Admin\GalleryController@index')->name('index');
        Route::post('/store','Admin\GalleryController@store')->name('store');
        Route::post('/update/','Admin\GalleryController@update')->name('update');
        Route::post('/del/','Admin\GalleryController@delete')->name('delete');
        Route::get('/manage/{id}/','Admin\GalleryController@manage')->name('manage');
        Route::post('/image/','Admin\GalleryController@imageStore')->name('img.store');
        Route::post('/image/del/','Admin\GalleryController@imageDelete')->name('img.delete');

    });

    Route::prefix('advertise')->name('advertise.')->group(function () {
        Route::get('/','Admin\AdvController@index')->name('index');
        Route::get('/add/','Admin\AdvController@create')->name('create');
        Route::post('/store','Admin\AdvController@store')->name('store');
        Route::get('/edit/{id}/','Admin\AdvController@edit')->name('edit');
        Route::post('/update/{id}','Admin\AdvController@update')->name('update');
        Route::get('/del/{id}/','Admin\AdvController@delete')->name('delete');
    });


    Route::prefix('video')->name('video.')->group(function () {
        Route::get('/','Admin\VideoController@index')->name('index');
        Route::get('/add/','Admin\VideoController@create')->name('create');
        Route::post('/store','Admin\VideoController@store')->name('store');
        Route::get('/edit/{id}/','Admin\VideoController@edit')->name('edit');
        Route::post('/update/{id}','Admin\VideoController@update')->name('update');
        Route::get('/del/{id}/','Admin\VideoController@delete')->name('delete');
    });


    Route::prefix('download')->name('download.')->group(function () {
        Route::get('/','Admin\DownloadController@index')->name('index');
        Route::get('/add/','Admin\DownloadController@create')->name('create');
        Route::post('/store','Admin\DownloadController@store')->name('store');
        Route::get('/edit/{id}/','Admin\DownloadController@edit')->name('edit');
        Route::post('/update/{id}','Admin\DownloadController@update')->name('update');
        Route::get('/del/{id}/','Admin\DownloadController@delete')->name('delete');
    });

    Route::prefix('activity')->name('activity.')->group(function () {
        Route::get('/','Admin\ActivityController@index')->name('index');
        Route::get('/add/','Admin\ActivityController@create')->name('create');
        Route::post('/store','Admin\ActivityController@store')->name('store');
        Route::get('/edit/{id}/','Admin\ActivityController@edit')->name('edit');
        Route::post('/update/{id}','Admin\ActivityController@update')->name('update');
        Route::get('/del/{id}/','Admin\ActivityController@delete')->name('delete');
    });

});



