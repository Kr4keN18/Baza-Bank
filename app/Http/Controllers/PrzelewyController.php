<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

use App\Models\Konto_Klienta;
use App\Models\User;
use App\Models\Klienci;
use Auth;


class PrzelewyController extends Controller
{
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
        $max = DB::table('users')->max('id');

        return view('dashboards.users.przelewlista',compact('max','users','konto'));
    }






}
