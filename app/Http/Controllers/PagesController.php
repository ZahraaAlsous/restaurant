<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Offer;
use App\Information;
use App\Meal;
use App\Team;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
    public function index(){
        $Offer = Offer::all();
        $Information = Information::all();

    	return view ('index', compact('Offer','Information'));
    }
     public function about(){
        $Information = Information::all();
        $Team = Team::all();

    	return view ('about-us',compact('Information','Team'));
    }
   
   
   public function contact(){
    $Information = Information::all();
    return view('contact-us',compact('Information'));
   }

    public function menu(){
        $Information = Information::all();
        $Meal = Meal::all();
        $userId = Auth::user();
        $location = Location::all();
        return view('menu',compact('Information','Meal','userId','location'));
    }
    public function single_post(){
        $Information = Information::all();

    	return view ('single-post',compact('Information'));
    }

     public function order(){
 $location = Location::all();
 $Information = Information::all();
    return view('order',compact('location','Information'));
      
    }
    public function delivery_costs()
    {
        $Information = Information::all();
        return view ('delivery_costs',compact('Information'));

    }
    public function reserve(){
        $Information = Information::all();

        return view ('reserve',compact('Information'));
    }
    public function competition(){
        $Information = Information::all();

        return view ('competition',compact('Information'));
    }
}


