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
    $comics = config('comics');
    return view('partials.current_series', compact('comics'));
});

Route::get('/single/{id}', function ($id) {
    $comics = config('comics');
    foreach($comics as $key => $comic){
    
        if($id == $key){
            return $comic = $comics[$id];
        }
    };
    return view('partials.single', compact('comics','comic'));
})->name('single');