<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transakcje;
use App\Models\Konto_Klienta;
use App\Models\User;
use App\Models\Klienci;
use Auth;




class TransakcjeController extends Controller
{
    //

public function index()
{

    $transakcje = Transakcje::all();

    /*
    $dane =  DB::table('transakcjes')
    ->join('kliencis','transakcjes.klient_id', '=', 'kliencis.id')
    ->select('transakcjes.tytul','transakcjes.kwota','transakcjes.nadawca', 'kliencis.imie', 'kliencis.nazwisko', 'transakcjes.data_wykonania')
    ->get();
    */

    return view('dashboards.users.przelewlista', compact('transakcje'));
}


public function create()
{
    $klients = Klienci::all();


    return view('dashboards.users.transakcje',compact('klients'));
}

public function store(Request $request)
    {

        DB::beginTransaction();
            $dodaj = $request->input('kwota');
            $nadawca = $request->get('nadawca');
            $odbiorca = $request->get('odbiorca');

            $kwota = DB::table('konto_klientas')->where('id', $odbiorca)->pluck('saldo');

            DB::update('update konto_klientas set saldo = saldo + ? where id = ?',[$dodaj, $odbiorca]);
            DB::update('update konto_klientas set saldo = saldo - ? where id = ?',[$dodaj, $nadawca]);
            //Konto_Klienta::where('id', $odbiorca)->update(['saldo' => $suma]);

        DB::commit();


        request()->validate([
            'tytul' => 'required',
            'kwota' => 'required',
            'nadawca' => 'required',
            'odbiorca' => 'required',
            'data_wykonania' => 'required',
        ]);

        Transakcje::create([
            'tytul' => request('tytul'),
            'kwota' => request('kwota'),
            'nadawca' => request('nadawca'),
            'odbiorca' => request('odbiorca'),
            'data_wykonania' => request('data_wykonania'),
        ]);

        return redirect('/user/przelewlista');
    }

public function update(Request $request, Konto_Klienta $konto)
    {
        //
    }


    public function edit(Transakcje $transakcje)
    {
        //
    }



}
