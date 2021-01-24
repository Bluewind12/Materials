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


Route::name('materials.')->group(function (){
    Route::get('/materials/list',function (){
        return view('materials/list');
    })->name('view');

    Route::get('/materials/store',function (){
        return view('materials/add');
    })->name('store');
});

Route::name('stages.')->group(function (){
    Route::get('/stages/list',function (){
        return view('stages/list');
    })->name('view');

    Route::get('/stages/store',function (){
        return view('stages/add');
    })->name('store');
});


