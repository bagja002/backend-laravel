<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    //

    //get All User 
    public function index()
    {
        $users = User::all();

        return response()-> json($users);
    }


    //get user by id 
    public function getUserId($id){
        $user = User::find($id);

        return response()->json($user);
    }

    //create users 
    public function store(Request $request){
        try{

            $data = $request->validate([
                "name"=> "required|string",
                "nik"=>"required|string",
                "departement"=>"required|string",
                "email"=>"required|email|unique:users",
                "no_telpon"=>"required|string",
                

            ]);

        }catch (ValidationException $e){
            return response()->json(['error' => $e->errors()], 422);
        }
        $user = User::create($data);
        return response()->json($user, 201);
    }


}
