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
    $comics_array = config('comics');
    
    $data = [
        'comics' => $comics_array
    ];



    return view('home', $data);

});

Route::get('/comics', function(){
    return view('comics');
});

Route::get('/single_comic/{id}', function($id){
    $comics_array = config('comics');
    $single_comic = [];

    foreach($comics_array as $comic){
        if($comic['id'] == $id){
            $single_comic = $comic;
        }
    }
    $data = [
        'single_comic' => $single_comic
    ];
   

    return view('single_comic', $data);
});

