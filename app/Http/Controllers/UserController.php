<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){

        return view('dashboards.users.index');
       }
    
       function profile(){
           return view('dashboards.users.profile');
       }
       function kredyt(){
           return view('dashboards.users.kredyt');
       }


       function danekonta(){
        return view('dashboards.users.danekonta');
    }
       

    function kantoruser(){
        return view('dashboards.users.kantoruser');
    }

    function przelewy(){
        return view('dashboards.users.przelewy');
    }
       
    function powiadomienia(){
        return view('dashboards.users.powiadomienia');
    }
       
}
