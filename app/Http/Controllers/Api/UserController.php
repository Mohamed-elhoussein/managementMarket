<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        return response()->json(["data"=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=User::findOrfail($id);

        return response()->json(["user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->except("_token","_method");
        $update=User::where("id",$id)->update($data);
        if($update){
            return response()->json([
                "userUpdate"=>$update,
                "message"=>"success update user"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findOrfail($id)->delete();

        return response()->json("success delete user");
    }
}
