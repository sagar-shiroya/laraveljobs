<?php

use Illuminate\Http\Request;
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

// Keeping it for reference
//Route::get('/hello', function(){
//    return response("<h1>Hello Laravel</h1>", 500)->header('Content-type', 'text/plain'); // .../hello
//});
//
//Route::get('/posts/{id}', function($id){
//    return response('Post:' . $id); // .../posts/10
//})->where('id','[0-9]+');
//
//Route::get('/search', function(Request $request){
//    return response('Name:' . $request->name, 200); // .../search?name=sagar
//});
