<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = [
            'name'=> $name,
            'email'=>$email,
            'password'=>$password,
            'signin'=>[
                'href'=>'v1/user/signin',
                'method'=>'POST',
                'params'=>'email, password'
            ]
        ];
        $response = [
            'msg'=>'User created Successfully',
            'user'=>$user
        ];
        return response()->json($response, 201);
    }

    public function signin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $login =[
            'email'=>$email,
            'password'=>$password,
            'signup'=>[
                'href'=>'v1/user/register',
                'method'=>'POST',
                'params'=>'name, password, email'
            ]
        ];
        $response = [
            'msg'=> 'User logged in successfully'
        ];

        return response()->json($response, 200);
    }
}
