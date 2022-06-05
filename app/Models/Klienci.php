<?php

namespace App\Models;

use App\Models\Konto_Klienta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Klienci extends Model
{
    use HasFactory;

    protected $table = 'kliencis';

    protected $fillable = [
        'id',
        'imie',
        'nazwisko',
        'plec',
        'data_urodzenia',
        'PESEL',
        'adres_zamieszkania',
        'email',
        'telefon'
    ];

    public function kontoklient() :BelongsTo
    {
        return $this->belongsTo(Konto_Klienta::class);
    }


    public $timestamps = false;
}
