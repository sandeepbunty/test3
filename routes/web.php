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

Route::post('student','student_details@store');

Route::get('student',function(){
	return view('student');
});
Route::resource('test3','SongsContoller');

Route::get('about', function () {
	$arr=['abc','def','123'];
    return view('about',['bit'=>$arr]);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('user',function(){
return view('user');
});

Route::get('user/create',['uses'=>'usercontroller@create']);

Route::post('user',['uses'=>'usercontroller@store']);

Route::get('/file',function(){
return view('file.home');
});