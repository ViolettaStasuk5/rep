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
//адача 3.4
Route::get('pages/show/{id}', [App\Http\Controllers\PageController::class, 'showOne'])->where('id', '[0-9]+');
Route::get('test/show/{param1}/{param2}', [App\Http\Controllers\TestController::class, 'show']);
//задача 3.8
Route::get('test/sum/{num1}/{num2}', [App\Http\Controllers\Test1Controller::class, 'sum']);
//задача 3.10
Route::get('test/show/{param1}',  [App\Http\Controllers\EmployeeController::class, 'showOne']);
//задача 3.11
Route::get('test/show/{param1}/{param2}',  [App\Http\Controllers\EmployeeController::class, 'showField']);
//лр 4
Route::get('test/show', [App\Http\Controllers\Controllers1::class, 'show']);
Route::get('test', [App\Http\Controllers\Controllers1::class, 'yaru']);
Route::get('date', [App\Http\Controllers\Controllers1::class, 'data']);
Route::get('test/array', [App\Http\Controllers\Controllers1::class, 'array']);
Route::get('product', [App\Http\Controllers\TestController:: class, "ShowProduct"]);
Route::get('products/{id}', [App\Http\Controllers\TestController:: class, "ShowOne"]); 
Route::get('test/city', [App\Http\Controllers\Controllers1::class, 'city']);
//Учебная практика
Route::get('/test', [App\Http\Controllers\Controllers1::class, 'show']);
?>
