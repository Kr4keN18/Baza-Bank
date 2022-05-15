<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karta_Platnicza extends Model
{
    use HasFactory;

    protected $table = 'karta__platniczas';

    protected $fillable = [
        'id', 'numer', 'cvc', 'okres_waznosci', 'nazwa_banku'
    ];
}
