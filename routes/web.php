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
Route::get('blog/{slug}',['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
Route::get('blog/readmore/{id}', 'BlogController@readmore')->name('blog.readmore');
Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');
Route::resource('announces', 'AnceController');
Route::resource('depart', 'departController');
Route::resource('events', 'EventController');
Route::get('events/edit/{id}','EventController@edit')->name('events.edit');
Route::post('events/destroy', 'EventController@destroy')->name('events.destroy');
Route::get('timeline', 'PagesController@timeline')->name('timeline');
Route::get('announcements', 'announcementsController@anceIndex')->name('announcements');

Route::group(['middleware' => ['web']], function (){
	//
});

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
