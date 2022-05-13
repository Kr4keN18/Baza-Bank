<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pracownicy extends Model
{
    use HasFactory;

    protected $table = 'pracownicy';

    protected $fillable = [
        'id', 'imie', 'nazwisko', 'plec', 'adres_zamieszkania', 'email', 'telefon', 'login'
    ];

    protected $hidden = [
        'haslo'
    ];
}
