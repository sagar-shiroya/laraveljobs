<?php

use App\Models\Listing;
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

Route::get('/', static function () {
    return view('listings',[
        'title' => 'Latest Job Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listing/{id}', static function ($id) {
    return view('listing',[
        'listing' => Listing::find($id)
    ]);
});
