<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\api\loginRequest;

class Login extends Controller
{
    public function login(loginRequest $request){
        if(Auth::attempt(["email"=>$request->email,"password"=>$request->password])){
            $user=Auth::user();
            $data["token"]=$user->createToken("my-app")->plainTextToken;
            $data["name"]=$user->name;

            return response()->json([
                "data"=>[
                    "user"=>$data,
                    "message"=>"successed login"
                ]
            ],200);

        }
        return response()->json([
            "message"=>"your email or password incorrect",
        ]);
    }
}
