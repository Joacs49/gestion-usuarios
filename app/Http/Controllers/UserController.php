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
}
