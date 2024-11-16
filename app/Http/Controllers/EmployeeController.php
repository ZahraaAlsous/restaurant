<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Employee;

class EmployeeController extends Controller
{
    public function add(){
        $userType = Auth::user()->usertype;

        return view('dashboard.add.employee' , compact('userType'));
    }

    public function store(Request $request){

        $employee = new Employee;

        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->age = $request->age;
        $employee->phone_number = $request->phone_number;
        $employee->address = $request->address;
        $employee->type_of_work = $request->type_of_work;
        $employee->salary = $request->salary;
        $employee->reward = $request->reward;
        $employee->total_salary = $request->total_salary;

        $employee->save();

        return back();

    }
}
