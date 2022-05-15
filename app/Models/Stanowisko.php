<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stanowisko extends Model
{
    use HasFactory;

    protected $table = 'stanowiskos';

    protected $fillable = [
        'id', 'nazwa', 'pensja'
    ];
}
