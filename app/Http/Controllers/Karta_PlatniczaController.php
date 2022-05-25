<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth,DB;
use App\Models\Karta_Platnicza;
use App\Models\User;
use App\Models\Waluta;

class Karta_PlatniczaController extends Controller
{
    public function index(Request $request){

        $karta = Karta_Platnicza::with('waluta')
        -> where('id',Auth::id())->pagiinate(10);

        if(Auth::user()->can('wyswietl-karte')){
            $karta = Karta_Platnicza::withTrashed()->with('waluta')->paginate(10);
        }

        $users = User::role('klient')->get();
        $waluty = Waluta::get();

        return view('widok.karty', compact('karty', 'waluty'));
    }

    public function store(Request $request){

        DB::beginTransaction();

        try{

            if(Auth::user()->can('dodaj-karte')){
                $karta = new Karta_Platnicza();
                $karta->id=$request->id;
                $karta->numer=$request->numer;
                $karta->available_balance=$request->available_balance;
                $karta->ledger_balance=$request->ledger_balance;
                $karta->id=$request->id;
                
                $karta->month=$request->month;
                $karta->year=$request->year;
                $karta->cvc=$request->cvc;

                $karta->status=$request->status;
                $karta->save();

                DB::commit();
                return redirect()->route('karta')->with('Sukces', 'Udało się dodać kartę');

            }else{

                DB::rollBack();
                return redirect()->route('karta')->with('Błąd', 'Nie udało się dodać karty');
            }
        }catch(\Exception $ex){

            Log::info($ex->getMessage());
            DB::rollBack();
            return redirect()->route('karta')->with('Błąd', 'Spróbuj ponownie dodać kartę później');
        }
    }

    
    function update(Request $request, $id){

        DB::beginTransaction();

        try{

            if(Auth::user()->can('edytuj=karte')){

                $karta = Karta_Platnicza::findOrfail($id);
                $karta->numer=$request->numer;
                $karta->available_balance=$request->available_balance;
                $karta->ledger_balance=$request->ledger_balance;

                $karta->month=$request->month;
                $karta->year=$request->year;
                $karta->cvc=$request->cvc;

                $karta->status=$request->status;
                $karta->save();

                DB::commit();
                return redirect()->route('karta')->with('Sukces', 'Udało się zaktualizować kartę');

                
            }else{

                DB::rollBack();
                return redirect()->route('karta')->with('Błąd', 'Nie udało się zaktualizować karty');
            }
        }catch(\Exception $ex){

            Log::info($ex->getMessage());
            DB::rollBack();
            return redirect()->route('karta')->with('Błąd', 'Spróbuj ponownie zaktualizować kartę później');
        }
    }

    function destroy(Request $request, $id){

        DB::beginTransaction();

        try{

            if( Auth::user()->can('usun-karte')){

                $karta = Karta_platnicza::findOrfail($id);
                $karta = delete();

                DB::commit();
                return redirect()->route('karta')->with('Sukces', 'Udało się usunąć kartę'); 
            }else{

                DB::rollBack();
                return redirect()->route('karta')->with('Błąd', 'Nie udało się usunąć karty'); 
            }
        }catch(\Expception $ex){
           
            Log::info($ex->getMessage());
            DB::rollBack();
            return redirect()->route('karta')->with('Błąd', 'Spróbuj usunąć kartę później');
        }
    }


}
