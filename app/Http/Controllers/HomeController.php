<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Offer;
use App\Information;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userType = Auth::user()->usertype;
        return view('home',compact('userType'));
    }
     public function redirects()
    {
        $userType = Auth::user()->usertype;
 $Offer = Offer::all();
  $Information = Information::all();
        if($userType == '0')
        {
               return view('index',compact('Offer','Information'));
            
        }
        else
        {
         return view('home',compact('userType'));
        }
    }
}
