<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\countries;
use App\Models\query;
use App\Models\services;
use Illuminate\Support\Facades\Validator;

class Admincontroller extends Controller
{
    //
    function dashboard(Request $request){
        if(Session::has('adminmail')){   
            $country_count=countries::count();
            $services_count=services::count();
            $queries=query::count();
            return view('admin.admin',compact('country_count','services_count','queries'));
        }else{
            return redirect()->route('adimin_login'); 
        }
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

    function services(){
        $services= services::get();
        return view('admin.services',compact('services'));
    }
    function service_add(){
        return view('admin.service_add');
    }
    function service_store(Request $request){
        $validator = Validator::make($request->all(), [ 
            'title' => 'required|unique:services', 
            'description' => 'required', 
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $service= new services;   
        $service->title=$request->title;   
        $service->description=$request->description;   
        $service->save();   
        return redirect()->route('services'); // Replace 'login' with the actual name of your login route
    }
    function service_delete($id){
        services::where('id',$id)->delete();
        return redirect()->back();
    }
    function service_edit($id){
        $service= services::where('id',$id)->first();
        return view('admin.service_edit',compact('service'));
    }

    function service_update(Request $request){
        $validator = Validator::make($request->all(), [ 
            'title' => 'required|unique:services', 
            'description' => 'required', 
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        services::where('id',$request->sid)->update([
            'title'=>$request->title,
            'description'=>$request->description
        ]);   
        return redirect()->route('services'); // Replace 'login' with the actual name of your login route
    }

    function queries(){
        query::where('read',0)->update([
            'read'=>1
        ]);
        $queries=query::get();
        return view('admin.queries',compact('queries'));

    }
    function fetchdata(){
        $data=array();
        $queries=query::where('read',0)->get();
        $data['queries']=$queries;
        return json_encode($data);
    }
    function readall(){
        $queries=query::where('read',0)->update([
            'read'=>1
        ]);
        return json_encode('done');
    }

    function admin_signin(Request $request){
        $validator = Validator::make($request->all(), [ 
            'uname' => 'required', 
            'pswd' => 'required', 
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->uname=='admin'&&$request->pswd=='admin'){
            Session::put('adminmail',$request->uname);
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('dashboard');
        }
    }
    function admin_logout(){
        Session::forget('adminmail');
        return redirect()->route('dashboard');
    }
}
