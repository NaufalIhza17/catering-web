<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function show() {
        return view('signup');
    }

    // RegisterRequest $request
    public function register(RegisterRequest $request) 
    {
        // return request()->all();
        $user = User::create($request->validated());

        auth()->login($user);
            
        return redirect('/')->with('success', "Account successfully registered.");
    }   
}
