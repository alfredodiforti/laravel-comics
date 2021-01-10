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
//A
// Route::get('/', function () {

//     $comics = config('minidb');
//     return view('home', compact('comics'));
// })->name('home');

//B
Route::get('/', 'Homecontroller@index')->name('home');
Route::get('/comic/{slug}', 'Comicontroller@show')->name('comic-det');
