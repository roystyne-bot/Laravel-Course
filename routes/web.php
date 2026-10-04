<?php

use Illuminate\Support\Facades\Route;

// Get routes example
Route::get('/', function () {
    return view('home');
    return "This is coldy's page";
});

// Parameters using routes
Route::get('/about/{firstname}/{lastname}', function ($firstname, $lastname) {
    return $firstname . ' ' . $lastname;
});

// Named routes 
Route::get('/test', function () {
    return 'This is a test';
})->name("testpage");

// Grouped routes(about related routes)
Route::get('/about', function () {
    return view('about');
});

Route::prefix("about")->group(function () {
    Route::get('/company', function () {
        return view('company');
    });

    Route::get('/organization', function () {
        return view('organization');
    });
});

