<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Requests;

class ApiAuthController extends Controller
{
    public function UserAuth(Request $request){
        $credentials = $request->only('email', 'password');
        $token = null;
        try{
            if (!$token = JWTAuth::attempt ($credentials)){
                return response()->json(['error' => 'Credenciales inválidas'], 401);
            }
        }catch (JWTException $ex){
            return response()->json(['error' => 'Algo causa error'], 500);
        }
        return response()->json(['token'=> $token], 200);
    }
}
