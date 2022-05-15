<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klienci extends Model
{
    use HasFactory;

    protected $table = 'kliencis';

    protected $fillable = [
        'id', 'imie', 'nazwisko', 'plec', 'data_urodzenia', 'PESEL', 'adres_zamieszkania', 'email', 'telefon'
    ];
}
