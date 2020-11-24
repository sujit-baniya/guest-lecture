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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/test-lecture', '\App\Http\Controllers\TestLecture@test');



Route::get('/test-lecture/{id}', function ($id) {
    return 'Hello ' . $id;
})->middleware('lecture');



Route::post('/test-lecture/{id}', function ($id) {
    return 'POST Hello ' . $id;
});