<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pracownicy extends Model
{
    use HasFactory;

    protected $table = 'pracownicies';

    protected $fillable = [
        'id', 'imie', 'nazwisko', 'plec', 'adres_zamieszkania', 'email', 'telefon'
    ];

  

    public function stanowisko() :BelongsTo
    {
        return $this->BelongsTo(stanowisko::class);
    }
}
