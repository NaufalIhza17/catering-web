<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $foods = $user->foods;
        return view('checkout', compact('foods'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'food_name' => 'required',
            'food_price' => 'required|numeric',
            'food_quantity' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
        ]);

        $food = new Food;
        $food->food_name = $validatedData['food_name'];
        $food->food_price = $validatedData['food_price'];
        $food->food_quantity = $validatedData['food_quantity'];
        $food->user_id = $validatedData['user_id'];
        $food->save();

        return redirect()->route('home');
    }
}