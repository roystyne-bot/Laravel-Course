<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Get routes example
Route::get('/', function () {
    return view('welcome');
    return "This is coldy's page";
});

/* Route::get('/contact', function () {
    return view('contact');
});


// POST route example

Route::post("/formsubmitted", function (Request $request) {

    $request->validate([
        'fullname' => 'required|min:3|max:30',
        'email' => 'required|min:3|max:30|email',
    ]);


    $fullname = $request->input("fullname");
    $email = $request->input("email");

    return "Your full name is  $fullname and your email is  $email!";
})->name('formsubmitted');

*/

// Parameters using routes
/*  Route::get('/about/{firstname}/{lastname}', function ($firstname, $lastname) {
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
*/
