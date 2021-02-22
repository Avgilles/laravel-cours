<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function login(){
       $credentials = request(['email', 'password']);
        $token = auth()-> attempt($credentials);

        if(!$token){
            return response()->json('Unauthorized', 401);
        }
        return $this -> respondWithToken($token);
   }
//   public function logout()
//   {
//       auth()-> logout();
//       return $this-> response->json('Successful  logged out');
//   }


   public function respondWithToken(string $token)
   {
       return response()->json([
           'access_token' => $token,
           'token_type' => 'bearer',
           'expires_in' => auth()->factory()->getTTL() *60,
       ]);
   }
}
