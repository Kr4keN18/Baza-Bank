<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konto_Klienta extends Model
{
    use HasFactory;

    protected $table = 'konto_klienta';

    protected $fillable = [
        'id', 'saldo', 'numer', 'login'
    ];

    protected $hidden = [
        'haslo'
    ];
}
