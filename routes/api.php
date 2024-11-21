<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemsController;

Route::resource('photos', ItemController::class);


 
Route::apiResource('test', ItemsController::class);

// List all items
Route::get('/items', [ApiController::class, 'listAll']);

// List individual item
Route::get('/items/{id}', [ApiController::class, 'listIndividual']);

// Handle contact form submission
Route::post('/contact', [ApiController::class, 'contact']);



Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/user/{name?}', function ($name = 'Guest') {
    return 'Welcome ' . $name;
});
