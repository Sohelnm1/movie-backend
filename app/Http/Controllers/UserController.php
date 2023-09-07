<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function store(Request $request){
        $data = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        $user = User::create($data);

        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);

    }

}