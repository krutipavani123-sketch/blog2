<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class apicontroller extends Controller
{
    function alluser()
    {
        $user = blog::all();
        return response()->json([
            'status' => true,
            'data' => $user
        ]);
    }
    public function singleuser($id)
    {
        $user = blog::find($id);
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'user not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $user
        ]);
    }
}
