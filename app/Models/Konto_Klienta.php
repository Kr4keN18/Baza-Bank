<?php

namespace App\Models;

use App\Models\Klienci;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasOne;

class Konto_Klienta extends Model
{
    use HasFactory;

    protected $table = 'konto_klienta';

    protected $fillable = [
        'id', 'saldo', 'numer', 'iban', 'swift'
    ];



    public function kliencis(): hasOne
    {
        return $this->hasOne(Klienci::class);
    }

   
}
