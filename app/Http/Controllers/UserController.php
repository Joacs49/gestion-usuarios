<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        try {
            $users = User::select("name", "lastname", "email", "numberphone", "country", "district", "direction")->get();
        
            return view("user.index", compact("users"));
        } catch (\Exception $e) {
        
        }
    }

    public function storeView()
    {
        return view('user.store'); 
    }

    public function store(UserRequest $request)
    {
        try {
            $request["password"] = bcrypt($request["password"]);
            User::create($request->all());

            return redirect()->route("users.index");
        } catch (\Exception $e) {
        
        }
    }

    public function show($id)
    {
        try {

        } catch (\Exception $e) {
        
        }
    }

    public function update(Request $request, $id)
    {
        try {

        } catch (\Exception $e) {
        
        }
    }

    public function destroy($id)
    {
        try {

        } catch (\Exception $e) {
        
        }
    }
}
