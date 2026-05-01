<?php

namespace App\Http\Controllers;

use App\Mail\loginmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class loginmailcontroller extends Controller
{
    function loginmail(Request $request)
    {

        $to = $request->to;
        $msg = $request->msg;
        $subject = $request->subject;
        Mail::to($to)->send(new loginmail($msg, $subject));
        return "Mail Send";
    }
}
