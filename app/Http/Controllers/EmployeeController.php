<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::orderByRaw('lname, fname')->limit(100)->get();
        return view('employees.index', ['employees' => $employees]);
    }
    public function create(){
        return view('employees.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'lname' => 'required',
            'fname' => 'required',
            'position' => 'required',
            'salary' => 'required'
        ]);

        Employee::create([
            'lname' => $request['lname'],
            'fname' => $request['fname'],
            'position' => $request['position'],
            'salary' => $request['salary']

        ]);

        return redirect('/employees')->with('info', 'A new Employees has been added.');
    }
}
