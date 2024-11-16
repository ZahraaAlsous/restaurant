<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Category;

class CategoryController extends Controller
{
   public function add(){
    
   $userType = Auth::user()->usertype;
       
       return view('dashboard.add.category' ,compact('userType'));
   }

   public function store(Request $request){

     $category = new Category;

     $category->name = $request->name;

     $category->save();

     return back();

   }
}
