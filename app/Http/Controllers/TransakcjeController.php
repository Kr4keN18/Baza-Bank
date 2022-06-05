<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transakcje;
use App\Models\Karta_Platnicza;
use App\Models\Konto_Klienta;
use Carbon\Carbon;
use Auth;

class TransakcjeController extends Controller
{
    //

    public function show(Request $request, $id ){

        $card = Karta_platnicza::where('numer', $numer)
        ->where('id', Auth::id())
        ->first();

        if(Auth::user()->can('nazwa')){
            $card = Karta_Platnicza::where('numer', $numer)->first();
        }

        if(!empty($card)){
            $transakcje = Transakcje::with('nazwa', 'typ')
            ->where('id', Auth::id())
            ->where('numer', $id)
            ->paginate(20);

            if(Auth::user()->can('nazwa')){
                $transakcje = Transakcje::with('nazwa', 'typ')
                ->where('id', $id)
                ->paginate(20);
            }

            return view('user.transakcje', compact('transakcje', 'karta_platnicza'));
        }else{
            return redirect()->route('cards')->with('błąd', 'Nie można znaleźć karty. Spróbuj ponownie');
        }
    }

    function storeTransactions(Request $request){
        DB::beginTransaction();
        try{

            $card = Karta_Platnicza::withTrashed()->find($request->numer);

            if($request->type == "typ"){
                
                if($request->balance == "saldo"){
                    $card->ledger_balance = $card->ledger_balance + $request->kwota;
                }else{
                    $card->available_balance = $card->available_balance + $request->kwota;
                }
            }else{

                if($request->balance == "saldo"){
                    $card->ledger_balance = $card->ledger_balance - $request->kwota;
                }else{
                    $card->available_balance = $card->available_balance - $request->kwota;
                }
            }

            $card->save();

            $transakcje = new Transakcja();
            $transakcja -> kwota = $request->kwota;
            $transakcja -> typ = $request->typ;
            $transakcja -> numer = $request->numer;
            $transakcja -> stan = $request->stan;
            $transakcja -> id = $request->id;
            $transakcja -> created_at = Carbon::parse($request->date);
            $transakcja -> updated_at = Carbon::parse($request->date);
            $cardTransaction->save();

            DB::commit();

            return redirect()->route('transakcje', $card->id)->with('Sukces', 'Transakcja powiodła się.');
        }catch(\Exception $ex){

            DB::rollback();
            return redirect()->route('transakcje', $card->id)->with('Błąd', 'Transakcja nie powiodła się. Spróbuj ponownie.');
        }
    }
}
