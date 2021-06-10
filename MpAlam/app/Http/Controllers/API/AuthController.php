<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        $validateData = $request->validate([
           'name'=>'required | max:55',
           'email'=>'email | required | unique:users',
           'password'=>'required | confirmed'
        ]);

        $validateData['password'] = Hash::make($request->password);

        $user = User::create($validateData);

        $accessToken = $user->createToken('authToken')->accessToken;
        return response(['user'=>$user ,'access_token' => $accessToken], 201);

    }


    // public function login(Request $request){
    //     $loginDate = $request->validate([
    //       'email' => 'email | required',
    //       'password' => 'required'
    //     ]);


   
    //     if(!auth()->attempt($loginDate)){
    //         return response(['message' => 'This user does not exits,check your details'],400);
    //     }

    //     $accessToken = auth()->user()->createToken('authToken')->accessToken;
    //     return response(['user'=>auth()->user(),'access_token'=>$accessToken]);
    // }
}
