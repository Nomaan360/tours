<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class Usercontroller extends Controller
{
    //
    function sendmail(Request $request){
        $data["usermail"] = $request->usermail;
        $data["username"] = $request->username;
        $data["subject"] = $request->subject;
        $data["body"] = $request->message;
        Mail::to('nomaan@360core.inc')->send(new ContactMail($data));

        // Mail::send('testmail', $data, function($message)use($data) {
        //     $message->to($data["email"])
        //             ->subject($data["subject"]);
        // });
    }

}
