<?php

namespace App\Http\Controllers\web;

use App\Models\cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class webController extends Controller
{
    public function index(){
        // $user_login=Auth::user()->id;
        // return cart::where("user_id",$user_login)->with("products.images")->get();
     $data=Product::with("images")->paginate(2);
        return view("web.index",compact("data"));
    }

    public function register(){
        return view("web.register");
    }

    public function Dataregister(Request $request){
        $user=User::create($request->toArray());
        Auth::login($user);
        return redirect("/");

    }

    public function login(){
        return view("web.login");
    }

    public function Datalogin(Request $request){
        if(Auth::guard("web")->attempt(["email"=>$request->email,"password"=>$request->password])){
            return redirect("/");
        }
        return to_route("web/login");
    }


    public function logout(){
        Auth::guard("web")->logout();

        return redirect("/");
    }


}
