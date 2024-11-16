<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
public function store(Request $request){

 


    $order=new Order;
    $order->note=$request->note;   
    $order->meal_size=$request->meal_size; 
    $order->date=$request->date; 
    $order->quantity=$request->quantity; 
    $order->location_id=$request->location_id; 
    $order->user_id=Auth::user()->id;
    $order->save();

     return back();

    }
   
}
