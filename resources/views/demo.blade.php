<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\loginmail;

class logincontroller extends Controller
{
  
    public function register(Request $request)
    {
        // Save the user to the database
        $user = login::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

       
        Auth::login($user);
        return redirect('welcome');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
             Mail::to($request->email)->send(new loginmail("You are Login", "You are login in blog management system"));
            return redirect('welcome');
        }

        // If wrong, go back with error
        return redirect('/')->with('error', 'Wrong email or password');
    }
}
