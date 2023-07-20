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

    $data = [ 
        'saluto' => 'Hello',
        'mondo'  => 'World',
    ];

    return view('home', $data);
});

Route::get('/bonus', function () {

    $data_2 = [ 
        'saluto' => 'Hello',
        'mondo'  => 'World',
        'biss'  => 'Again'
    ];

    return view('bonus', $data_2);
});

Route::get('/bonus2', function () {

    $faccia = 'https://media.licdn.com/dms/image/D4E03AQFoIph97A61kA/profile-displayphoto-shrink_800_800/0/1689181792161?e=1695254400&v=beta&t=nwhRdLcQhgdC693c9Xwvx0aTGHBXfpBEd8Mhu_yEzSA'   ;

    return view('bonus2',compact('faccia'));
});
