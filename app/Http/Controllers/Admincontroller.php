<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\countries;
use Illuminate\Support\Facades\Validator;

class Admincontroller extends Controller
{
    //
    function adminlogin(Request $request){
        $country_count=countries::count();
        return view('admin.admin',compact('country_count'));
    }
    function countries(){
        $countries= countries::get();
        return view('admin.countries',compact('countries'));
    }

    function country_add(){
        return view('admin.country_add');
    }
    function country_store(Request $request){
        $validator = Validator::make($request->all(), [ 
            'countryname' => 'required|unique:countries', 
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $country= new countries;   
        $country->countryname=$request->countryname;   
        $country->save();   
        return redirect()->route('countries'); // Replace 'login' with the actual name of your login route
    }
    function country_delete($id){
        countries::where('id',$id)->delete();
        return redirect()->back();
    }
    function country_edit($id){
        $country= countries::where('id',$id)->first();
        return view('admin.country_edit',compact('country'));
    }

    function country_update(Request $request){
        $validator = Validator::make($request->all(), [ 
            'countryname' => 'required|unique:countries', 
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        countries::where('id',$request->cid)->update([
            'countryname'=>$request->countryname
        ]);   
        return redirect()->route('countries'); // Replace 'login' with the actual name of your login route
    }
}
