<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
  public function login(LoginRequest $request )
  {
    $credentials=$request->only('email','password');
    $token=auth('api')->attempt($credentials);
    if(!$token)
        {
            return response(['message'=>'unauthorized access'],401);
        }
        return response()->json([
             'access_token'=>$token,
            'expires_in'=>auth('api')->factory()->getTTL()*60
        ]);

  }
  public function refresh()
  {
    $refreshedToken=auth('api')->refresh();
    return response()->json([
        'refreshed_token'=>$refreshedToken,
        'expires_in'=>auth('api')->factory()->getTTL()*60
    ]);
  }
  public function me()
  {
    $user=auth('api')->user();
    return response()->json($user);
  }
  public function logout()
  {
    auth('api')->logout(true);
    return response()->json(["message"=>"Logged out successfully"]);
  }
}
