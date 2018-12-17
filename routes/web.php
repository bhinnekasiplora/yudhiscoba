<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutbpbd', function(){
	return view('Tubes/aboutbpbd');
} );
Route::get('/tubes', function () {
    return view('Tubes/index');
});
Route::get('/form', function () {
    return view('Tubes/formulirMasy');
});
Route::get('/laporform', function () {
    return view('Tubes/laporform');
});
Route::get('/bpbd', function () {
    return view('Tubes/bpbd');
});
Route::get('/aboutbpbd', function () {
    return view('Tubes/aboutbpbd');
});
Route::get('/masuk', function () {
    return view('Tubes/loginlayout');
});
Route::get('/signup', function () {
    return view('Tubes/registerlayout');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
