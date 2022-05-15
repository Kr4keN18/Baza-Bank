<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transakcje extends Model
{
    use HasFactory;

    protected $table = 'transakcjes';

    protected $fillable = [
        'id', 'nazwa', 'typ', 'stan', 'nadawca', 'odbiorca', 'kwota', 'data_wykonania'
    ];
}
