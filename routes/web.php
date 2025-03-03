<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;

$cats = [ 
    ['name' => 'Fluffy', 'color' => 'black'],
    ['name' => 'Whiskers', 'color' => 'white'],
    ['name' => 'Socks', 'color' => 'orange']
];


Route::get('/', function () use ($cats) {
    return view('home', [
        'cats' => $cats
        ]
    );
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// New route for cat photos
Route::get('/cats', [CatController::class, 'index']);
