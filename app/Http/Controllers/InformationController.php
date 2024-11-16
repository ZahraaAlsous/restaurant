<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Information;


class InformationController extends Controller
{
    public function add(){
    $userType = Auth::user()->usertype;

        return view('dashboard.add.information',compact('userType'));
    }

    public function store(Request $request){

         $information = new Information;

         $information->name = $request->name;
         $information->phone_number = $request->phone_number;
         $information->facebook = $request->facebook;
         $information->instagram = $request->instagram;
         $information->email = 'email';
         $information->location = $request->location;
         $information->logo = $request->logo;
         $information->opening_days = $request->opening_days;
         $information->opening_time = $request->opening_time;
         $information->closing_time = $request->closing_time;

         $information->save();

         return redirect('/all/information');
    }

    public function all(){
    $userType = Auth::user()->usertype;
    $information = Information::all();

        return view('dashboard.all.information',compact('userType' , 'information'));
    }

    public function delete($id){

        $information = Information::where('id' , $id)->first();

        $information->delete();
        return back();
    }

    public function edit($id){

       $userType = Auth::user()->usertype;
        $information = Information::find($id);
        return view('dashboard.edit.information',compact('userType' , 'information'));
         

    }

    public function update($id, Request $request){

        $information = Information::find($id);
         $information->name = $request->name;
         $information->phone_number = $request->phone_number;
         $information->facebook = $request->facebook;
         $information->instagram = $request->instagram;
         $information->email = 'email';
         $information->location = $request->location;
         $information->logo = $request->logo;
         $information->opening_days = $request->opening_days;
         $information->opening_time = $request->opening_time;
         $information->closing_time = $request->closing_time;

         $information->save();

         return redirect('/all/information');
    }
}
