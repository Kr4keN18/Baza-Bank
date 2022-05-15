<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kredyt extends Model
{
    use HasFactory;

    protected $table = 'kredyts';

    protected $fillable = [
        'id', 'typ', 'ilosc_rat' 
    ];
}
