<?php



Route::get('/', function () {
    return view('web.index');
});
Route::get('/post', function () {
    return view('web.post');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
