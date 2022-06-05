<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Klienci;

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
       

    public function shiftdata(){
        $users = User::get();
        foreach ($users as $key => $value){
            Klienci::create([
            'imie'=>$value->name,
            'nazwisko'=>$value->surname,
            'plec'=>$value->gender,
            'data_urodzenia'=>$value->birth_date,
            'PESEL'=>$value->pesel,
            'adres_zamieszkania'=>$value->adres_zamieszkania,
            'email'=>$value->email,
            'telefon'=>$value->phone_no,
            ]);
            }
            

}


function transakcje(){
    return view('dashboards.users.transakcje');
}



}
