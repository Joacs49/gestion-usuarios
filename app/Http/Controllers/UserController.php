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
            $users = User::select("name", "lastname", "email", "numberphone", "country", "district", "direction")->get();
            
            return view("user.index", compact("users"));
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

    public function show(SearchRequest $request)
    {
        $query = $request->input('busqueda');
    
        try {
            if (empty($query)) {
                $users = User::select("id", "name", "lastname", "email", "numberphone", "country", "district", "direction")->get();
            } else {
                $users = User::where('name', 'LIKE', "%{$query}%")
                             ->select("id", "name", "lastname", "email", "numberphone", "country", "district", "direction")
                             ->get();
            }
    
            return response()->json($users);
    
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Ocurrió un error en la consulta',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $users = User::findOrFail($id);
            $users->delete();

            return redirect()->route("users.index");
        } catch (\Exception $e) {
        
        }
    }
}
