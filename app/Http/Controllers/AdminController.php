<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    
    function index(){

        return view('dashboards.admins.index');
       }
    
       function profile(){
           return view('dashboards.admins.profile');
       }
       function settings(){
           return view('dashboards.admins.settings');
       }

       function pracownicyadmin(){
        return view('dashboards.admins.pracownicyadmin', [
        'users' => User::all()
       ]);
    }

    function kantoradmin(){
        return view('dashboards.admins.kantoradmin');
    }

    //
    //function tabela(){
     //   return view('dashboards.admins.tabela', [
      //      'users' => User::all()
       // ]);
    //}



}



