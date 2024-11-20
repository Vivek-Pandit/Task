<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


// List all items
Route::get('/items', [ApiController::class, 'listAll']);

// List individual item
Route::get('/items/{id}', [ApiController::class, 'listIndividual']);

// Handle contact form submission
Route::post('/contact', [ApiController::class, 'contact']);


 
Route::get('/greeting', function () {
    return 'Hello World';
});