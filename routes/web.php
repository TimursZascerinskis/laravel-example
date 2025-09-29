<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('form');
});
Route::resource('posts', PostController::class);

Route::get('/static-form', function () {
    return view('static_form');
});


Route::post('/submit-static-form', function (Request $request) {
    // Log submitted data (for debugging)
    \Log::debug($request->all());

    // Optionally, return a simple confirmation response
    return "Form submitted successfully! Received: " . json_encode($request->all());
});