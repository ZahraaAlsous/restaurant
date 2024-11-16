<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Offer;

class OfferController extends Controller
{
    public function add(){
       $userType = Auth::user()->usertype;

        return view('dashboard.add.offer ' ,compact('userType'));
    }

    public function store(Request $request){

        $offer = new Offer;

        $offer->description = $request->description;
        $offer->price = $request->price;
        $offer->image = $request->image;
        $offer->start_date = $request->start_date;
        $offer->end_date = $request->end_date;

        $offer->save();

        return back();
    }
}
