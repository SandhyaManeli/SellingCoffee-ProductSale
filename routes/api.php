<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// routes/web.php or routes/api.php

use App\Http\Controllers\CoffeeController;

Route::post('/calculate-sell-price/{coffeeType}', [CoffeeController::class, 'calculateSellPrice']);


