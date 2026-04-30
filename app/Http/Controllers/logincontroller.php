<?php

namespace App\Http\Controllers;

use App\Models\login;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    function login(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required | unique',
            "password" => 'required | min:4',
        ]);

        $user = login::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }
}

//     function logindata(Request $request)
//     {
//         $data = new login();
//         $data->name = $request->name;
//         $data->email = $request->email;
//         $data->password = $request->password;
//         $data->save();
//         if ($data) {
//             return redirect('list');
//         } else {
//             return "Not Login";
//         }
//     }
// }
