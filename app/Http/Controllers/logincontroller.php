<?php

namespace App\Http\Controllers;

use App\Models\login;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;




class logincontroller extends Controller
{
    function login(Request $request)
    {
        
        $request->validate([
            "name"     => 'required',
            "email"    => 'required|email|unique:logins,email',
            "password" => 'required|min:4',

        ]);

        login::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);

        
    }
}


?>

