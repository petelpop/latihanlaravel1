<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/{id}',[TaskController::class, 'show'] );
Route::post('/tasks/', [TaskController::class, 'store']);
Route::patch('/tasks/{id}', [TaskController::class, 'update'] );
Route::delete('/tasks/{id}', [TaskController::class, 'delete'] );



// Route::get('test', function(){
//     return view('test');
// });

// Route::get('/hello', function(){
//     // return response() -> json ([ ]);
//     $dataArray = [
//         'message' => 'Hello world',
//         'test' => 'testing'
//     ];
//     return ddd($dataArray);

// });
