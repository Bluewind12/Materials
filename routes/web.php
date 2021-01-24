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
    return view('test');
});

Route::get('/list/materials', function () {
    return view('list/material_list');
})->name('list.materials');

Route::get('/list/stages', function () {
    return view('list/stage_list');
})->name('list.stages');

Route::get('/add/materials', function () {
    return view('add/material_add');
})->name('add.materials');
Route::get('/add/stages', function () {
    return view('add/stage_add');
})->name('add.stages');


