<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Table;

class TableController extends Controller
{
    public function add(){

        $userType = Auth::user()->usertype;

        return view('dashboard.add.table' ,compact('userType'));
    }

    public function store(Request $request){

        $table = new Table;

        $table->number_of_people = $request->number_of_people;
        $table->number_of_tables = $request->number_of_tables;
        $table->price = $request->price;

        $table->save();

        return back();
    }
}
