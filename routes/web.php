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

$taskList = [
    'first' => 'eat',
    'second' => 'work',
    'third' => 'play'
];

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/hello', function () {
    // return response()->json([ ]);
    $dataArray = [
        'message' => 'Hello World',
        'test' => 'test'
    ];

    return ddd($dataArray);
});


Route::get('/tasks', function () use ($taskList) {
    if (request()->search) {
        return $taskList[request()->search];
    } else {
        return $taskList;
    }
});

Route::get('/tasks/{param}', function ($param) use ($taskList) {
    return $taskList[$param];
 });

Route::post('/tasks', function () use ($taskList) {
    //return request()->all();

});

Route::patch('/tasks/{key}', function ($key) use ($taskList) {
    $taskList[request()->key] = request()->task;
    return $taskList;
});

Route::delete('/tasks/{key}', function ($key) use ($taskList) {
    unset($taskList[$key]);
    return $taskList;
});