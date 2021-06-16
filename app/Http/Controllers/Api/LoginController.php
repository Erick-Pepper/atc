<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
   
    public function login (Request $request){ // En este metodo se inicia el login
$this->validateLogin($request);
//Login Logrado

if (Auth::attempt($request->only('email', 'password'))) {
    return response()->json([
      'token' => $request->user()->createToken($request->name)->plainTextToken,
      'message' => 'Success'
    ]);
  }

//Login fallido
return response()->json([
    'message' => 'Unauthorized'
  ], 401);

    }
public function validateLogin(Request $request){//En este metodo se hacen las validaciones del login

    return $request->validate([
 
        'email'=>'required|email',
        'password'=>'required',
        'name'=> 'required'

        
    ]);



}



}
