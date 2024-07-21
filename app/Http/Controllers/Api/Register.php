<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Register extends Controller
{
    public function Register(Request $request){
        $newUser=User::create($request->toArray());
        if($newUser){
            return response()->json([
                "NewUser"=>$newUser,
                "message"=>"success add new user"
            ]);
        }


        return response()->json([
            "message"=>"you have error"
        ]);
    }
}
