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

Route::get('/', 'HomeController@index')->name('/');

Route::get('/about', function () {
	$data = array(
		'title' => 'About Me',
		'subTitle' => 'This is what I do.',
	);

    return view('pages.about', compact('data'));
});

Route::get('/contact', function () {
	$data = array(
		'title' => 'Contact Me',
		'subTitle' => 'Have questions? I have answers (maybe).',
	);

    return view('pages.contact', compact('data'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index')->name('post');
Route::get('/post/show/{post}', 'HomeController@show')->name('post.show');

Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/create', 'PostController@strore')->name('post.strore');

Route::get('/post/edit/{post}', 'PostController@edit')->name('post.edit');
Route::patch('/post/edit/{post}', 'PostController@update')->name('post.update');


Route::delete('/post/delete/{post}', 'PostController@destroy')->name('post.destroy');