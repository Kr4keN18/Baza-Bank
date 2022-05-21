<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waluta;
use Auth;

class WalutaController extends Controller
{
    //

    public function index(Request $request){
        $waluty = Waluta::paginate(20);
        return view('page.currencies', compact('waluty'));
    }

    public function store(Request $request){

        try{

            if( Auth::user()->can('dodaj-walute')){
                $waluta = new Waluta();
                $waluta -> nazwa = $request->nazwa;
                $waluta -> symbol = $request->symbol;
                $waluta -> save();
                return back()->withInput()->with('Sukces', 'Udało się dodać walutę');
            }else{
                return back()->withInput()->with('Błąd', 'Nie udało się dodać waluty. Nieautoryzowane działanie');
            }
        }catch(\Exception $ex){
            return back()->withInput()->with('Błąd', 'Nie udało się dodać waluty. Spróbuj ponownie później');
        }
    }

    public function update(Request $request, $id){

        try{

            if( Auth::user()->can('aktualizuj-walute')){
                $waluta = Waluta::findOrfail($id);
                $waluta->nazwa=$request->nazwa;
                $waluta->symbol=$request->symbol;
                $waluta->save();
                return back->withInput()->with('Sukces', 'Udało się zaktualizować walutę');
            }else{
                return back()->withInput()->with('Błąd', 'Nie udało się zaktualizować waluty. Nieautoryzowane działanie');
            }
        }catch(\Exception $ex){
            return back()->withInput()->with('Błąd', 'Nie udało się zaktualizować waluty. Spróbuj ponownie później'); 
        }
    }
}
