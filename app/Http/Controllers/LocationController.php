<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Location;

class LocationController extends Controller
{
     public function add(){
      $userType = Auth::user()->usertype;
       
       return view('dashboard.add.location' ,compact('userType'));
   }

   public function store(Request $request){

    $location = new Location;

    $location->name = $request->name;

    $location->save();

    return back();
   }
}
