<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{   
    //

    //Crud Untuk Admin Lur 
    //get all admin 
    public function index(){
        $admin = Admin::all();
        
        return response()->json($admin);
    }

    //ngambil data 1  admin 
    public function getAdmin($id){
        $admin= Admin::find($id);
        return response()->json($admin);
    }

    //create data admin 
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:admins',
                'password' => 'required|string|min:8', // Minimum password length of 8 characters
            ]);
        } catch (ValidationException $e) {
            // If validation fails, return a response with detailed error messages
            return response()->json(['error' => $e->errors()], 422);
        }

        $admin = Admin::create($data);

        return response()->json($admin, 201);
    }




}
