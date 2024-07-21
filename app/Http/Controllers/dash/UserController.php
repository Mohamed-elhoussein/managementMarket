<?php

namespace App\Http\Controllers\dash;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allow=Gate::forUser("admin")->allows("view.user");
        if(!$allow){
            abort(403);
        }
        $admins=Admin::all();
        return view("dash.users.view",compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dash.users.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Admin::create($request->toArray());
        return redirect()->route("user.index");
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin=Admin::findOrfail($id);
        return view("dash.users.edit",compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request["permission"]=implode("+",$request->permission);

        $newData=$request->except("_token","_method","proengsoft_jsvalidation");
        Admin::where("id",$id)->update($newData);
        return redirect()->route("user.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Admin::findOrfail($id)->delete();
        return redirect()->route("user.index");
    }
}
