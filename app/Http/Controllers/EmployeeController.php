<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function index(){

        return view('dashboards.employee.index');
       }
    
       function profile(){
           return view('dashboards.employee.profile');
       }
       

}
