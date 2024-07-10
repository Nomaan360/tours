<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\query;

class Usercontroller extends Controller
{
    //
    function sendmail(Request $request){
        $data["usermail"] = $request->usermail;
        $data["username"] = $request->username;
        $data["subject"] = $request->subject;
        $data["body"] = $request->message;
        $query= new query;
        $query->uname=$request->username;
        $query->uemail=$request->usermail;
        $query->subject=$request->subject;
        $query->message=$request->message;
        $query->save();
        Mail::to('nomaan@360core.inc')->send(new ContactMail($data));


        return redirect()->back();

        // Mail::send('testmail', $data, function($message)use($data) {
        //     $message->to($data["email"])
        //             ->subject($data["subject"]);
        // });
    }

}
