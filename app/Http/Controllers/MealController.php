<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Meal;

class MealController extends Controller
{
    public function add(){
       
$userType = Auth::user()->usertype;
        return view('dashboard.add.meal',compact('userType'));
    }

    public function store(Request $request){


       $meal = new Meal;

       $meal->name = $request->name;
       $meal->ingredients = $request->ingredients;
       $meal->image = $request->image;
       $meal->price = $request->price;
       $meal->type = $request->type;
       $meal->calories = $request->calories;

       $meal->save();

       return redirect('/all/meal');

    }

    public function all(){
        $userType = Auth::user()->usertype;
        $meals = Meal::all();

         return view('dashboard.all.meal' ,compact('userType', 'meals'));
    }

    public function delete($id){

        $meal = Meal::where('id' , $id)->first();

        $meal->delete();
        return back();
    }

    public function edit($id){
     $userType = Auth::user()->usertype;
     $meal = Meal::find($id);
        return view('dashboard.edit.meal',compact('userType' , 'meal'));

    }

    public function update($id ,Request $request ){

        $meal = Meal::find($id);
       $meal->name = $request->name;
       $meal->ingredients = $request->ingredients;
       $meal->image = $request->image;
       $meal->price = $request->price;
       $meal->type = $request->type;
       $meal->calories = $request->calories;

       $meal->save();

       return redirect('/all/meal');

    }
}
