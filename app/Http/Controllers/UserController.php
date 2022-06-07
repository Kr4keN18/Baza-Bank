<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Klienci;
use App\Models\Konto_Klienta;
use Auth;

class UserController extends Controller
{
    function index(){

        return view('dashboards.users.index');
       }
    
       function profile(){
           return view('dashboards.users.profile', [
           'klienci' => Klienci::all()
           ]);
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
     
    function przelewlista(){
        return view('dashboards.users.przelewlista', [
        'kliencis' => Klienci::all(),
        'konta' => Konto_Klienta::all()
       ]);
    }


    public function shiftdata(){
        $users = User::get();
        foreach ($users as $key => $value){
            Klienci::create([
            'imie'=>$value->name,
            'nazwisko'=>$value->surname,
            'plec'=>$value->gender,
            //'data_urodzenia'=>$value->birth_date,
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


function stankonta(){
    return view('dashboards.users.danekonta', [
    'kliencis' => Klienci::all(),
    'konta' => Konto_Klienta::all()
   ]);

}

public function create(array $data)
{
  
}

public function store(Request $request)
    {
        request()->validate([
            'imie' => 'required',
            'nazwisko' => 'required',
            'plec' => 'required',
            //'data_urodzenia' => 'required',
            'PESEL' => 'required',
            'adres_zamieszkania' => 'required',
            'telefon' => 'required',
            'klient_id'=>'required'
            
        ]);

        Klienci::create([
            'imie' => request('imie'),
            'nazwisko' => request('nazwisko'),
            'plec' => request('plec'),
            //'data_urodzenia' => request('data_urodzenia'),
            'PESEL' => request('PESEL'),
            'adres_zamieszkania' => request('adres_zamieszkania'),
            'telefon' => request('telefon'),
            'klient_id' => request('klient_id')

        ]);

        return redirect('/user/dashboard');
    }


    function przelew(){
        return view('dashboards.users.transakcje', [
        'kliencis' => Klienci::all(),
        'konta' => Konto_Klienta::all()
       ]);
    }



    public function update(Request $request, Konto_Klienta $konto)
    {
        request()->validate([
            'saldo' => 'required',
            'numer' => 'required',
            'iban' => 'required',
            'swift' => 'required',
        ]);

        $konto->update([
            'saldo' => request('saldo'),
            'numer' => request('numer'),
            'iban' => request('iban'),
            'swift' => request('swift'),
        ]);

        return redirect('/user/przelewylista');
    }


    public function edit(Konto_Klienta $konto)
    {
        $users = User::all();
        $saldo = Konto_Klienta::all();

        return view('dashboards.users.przelewlista',compact('users','saldo'));
    }






}
