<?php

namespace App\Http\Controllers\dash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view("dash.login");
    }

    public function CheckLogin(Request $request){
        if(Auth::guard("admin")->attempt(["email"=>$request->email,"password"=>$request->password])){
            return to_route("user.index");
        }
        return to_route("dash/login")->with("error","your email or password incorrect");
    }
}
