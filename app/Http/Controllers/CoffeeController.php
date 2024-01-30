<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    public function calculateSellPrice(Request $request, $coffeeType){
		
		$validatedData = $request->validate([
        'quantity' => 'required|integer|min:1',
        'unit_cost' => 'required|numeric|min:0'
		], [
			'quantity.required' => 'quantity is required',
			'unit_cost.required' => 'unit_cost required'
		]);
		
		$quantity = $validatedData['quantity'];
		$unitCost = $validatedData['unit_cost'];
		$shippingCost = 10.00;

		switch ($coffeeType) {
			case 'gold':
				$profitMargin = 0.25;
				break;
			case 'arabic':
				$profitMargin = 0.15;
				break;
			default:
				return response()->json(['error' => 'Invalid coffee type'], 400);
		}
		$cost = $quantity * $unitCost;
		$sellingPrice = ($cost / (1 - $profitMargin)) + $shippingCost;
		$sellingPrice = number_format($sellingPrice, 2, '.', '');
		return response()->json(['selling_price' => $sellingPrice]);
    }
}
