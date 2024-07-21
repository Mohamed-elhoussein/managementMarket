<?php

namespace App\Http\Controllers\web;

use App\Models\cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function addCart(Request $request){
        $user_id=Auth::user()->id;
        $found=cart::where(["product_id"=>$request->product_id,"user_id"=>$user_id])->first();

        if(!$found){
            $cart=new cart();
            $cart->user_id=$user_id;
            $cart->product_id=$request->product_id;
            $cart->count=1;
            $cart->save();
            return "success";


        }else{
            $found->increment("count");
            return "increment";
        }
    }



    public function Delete_item(Request $request){
        $user_id=Auth::user()->id;
        cart::where(["user_id"=>$user_id,"product_id"=>$request->product_id])->delete();
        return "delete item";
    }
}
