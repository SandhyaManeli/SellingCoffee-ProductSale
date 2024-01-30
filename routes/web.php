<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CoffeeController;

Route::post('/calculate-sell-price/{coffeeType}', [CoffeeController::class, 'calculateSellPrice']);


Route::get('/test', function () {
    return 'Route working!';
});


