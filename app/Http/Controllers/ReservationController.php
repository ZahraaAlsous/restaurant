<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
USE App\Reservation;

class ReservationController extends Controller
{
    public function add()
    {
    	$userType = Auth::user()->usertype;

    	return view('dashboard.add.reservation',compact('userType'));
    }

    public function store(Request $request)
    {
        $userType = Auth::user()->usertype;
    	$reservation = new Reservation;

    	$reservation->date = $request->date ;
    	$reservation->number_of_people = $request->number_of_people ;
    	$reservation->note = $request->note ;

        $reservation->save();

        if($userType == '0')
        {
         return back();  
        }
        else
        {
         return redirect('/all/reservations');
        }
        
    }

    public function all()
    {
        $userType = Auth::user()->usertype;
        $titel ='All Reservations';
        $Reservation = Reservation::all();
        return view('dashboard.all.reservation',compact('userType','Reservation','titel'));
    }

    public function delete($id)
    {
        $Reservation = Reservation::find($id);

        $Reservation->delete();

        return back();
    }

    public function edit($id)
    {
        $userType = Auth::user()->usertype;
        $titel ='Edit Reservation';
        $Reservation = Reservation::find($id);

        return view('dashboard.edit.reservation',compact('userType','titel','Reservation'));
    }

    public function update($id , Request $request)
    {
        $Reservation = Reservation::find($id);

        $Reservation->date = $request->date ;
        $Reservation->number_of_people = $request->number_of_people ;
        $Reservation->note = $request->note ;

        $Reservation->save();

        return redirect('/all/reservations');
    }
}