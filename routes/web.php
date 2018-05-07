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
    return view('welcome');
});

Route::get('/test', function () {
   
    $name = 'Vithursan';
    $tasks = [
	'Watch Laracast',
	'Develop',
	'Deploy!'
    ];

    return view('test', compact('name', 'tasks'));
});

Route::get('/db', function () {

    return view('dbPage');
});

Route::get('/db/{title}', function ($title) {
   
    $tasks = DB::table('titles')
    			->where('primaryTitle', 'LIKE', "%$title%")
    			->get();

    return $tasks;
});

