<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waluta extends Model
{
    use HasFactory;

    protected $table = 'waluta';

    protected $fillable = [
        'id', 'nazwa', 'symbol'
    ];
}
