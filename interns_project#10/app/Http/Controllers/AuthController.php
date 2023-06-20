<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function show()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {

        $credentials = $request->only(['email', 'password']);

        if (auth()->attempt($credentials)) {
            return redirect()->route('employees.index');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid Credentials']);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('welcome')->with('message', 'Logged out successfully.');
    }
}
