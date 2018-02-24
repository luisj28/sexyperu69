<?php



/* Route::get('/', function () {
    return view('web.index');
}); */
Route::get('/post', function () {
    return view('web.post');
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail/{id}', 'HomeController@detail')->name('detail');
