<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\SearchRequest;
use App\Http\Requests\User\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        try {
            return view("user.index");
        } catch (\Exception $e) {
        
        }
    }

    public function storeView()
    {
        try {
            return view('user.store');
        } catch (\Exception $e) {
        
        }
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
}
