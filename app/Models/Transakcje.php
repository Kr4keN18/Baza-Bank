<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transakcje extends Model
{
    use HasFactory;

    //protected $table = 'transakcjes';

    protected $fillable = [
        'id', 'tytul', 'kwota', 'nadawca', 'odbiorca', 'data_wykonania'
    ];


    public $timestamps = false;
}
