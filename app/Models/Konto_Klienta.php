<?php

namespace App\Models;

use App\Models\Klienci;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Konto_Klienta extends Model
{
    use HasFactory;

    protected $table = 'konto_klientas';

    protected $fillable = [
        'id', 'saldo', 'numer', 'iban', 'swift'
    ];



    public function kliencis(): hasOne
    {
        return $this->hasOne(Klienci::class);
    }


    public function kartaklient() :BelongsTo
    {
        return $this->belongsTo(Karta_Platnicza::class);
    }


    public $timestamps = false;
}
