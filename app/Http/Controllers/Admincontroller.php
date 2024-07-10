<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\countries;

class Admincontroller extends Controller
{
    //
    function adminlogin(Request $request){
        $country_count=countries::count();
        return view('admin.admin',compact('country_count'));
    }
}
