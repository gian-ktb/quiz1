<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;

// Default homepage route
Route::get('/', function () {
    return view('welcome');
});

// Step 10: Hello route with a dynamic name
Route::get('hello/{name}', function($name) {
    return 'Hi ' . $name;
});

// Inventory CRUD routes
Route::resource('inventory', InventoryController::class);
