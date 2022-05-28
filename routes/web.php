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

Route::get('/', static function () {
    return view('listings',[
        'title' => 'Latest Job Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'This is listing one for Laravel jobs'
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'This is listing two for Laravel jobs'
            ],
            [
                'id' => 3,
                'title' => 'Listing three',
                'description' => 'This is listing three for Laravel jobs'
            ],
        ]
    ]);
});
