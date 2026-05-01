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
        //return $request;

        $request->validate([
            "name"     => 'required',
            "email"    => 'required',
            "password" => 'required|min:4',

        ]);

        $user = login::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);


        if ($user) {
            Auth::login($user);
            $request->session()->regenerate();
            return redirect('welcome')->with('success', 'login success');
        } else {
            return redirect('/')->with('error', 'User cannot login');
        }
    }
}
