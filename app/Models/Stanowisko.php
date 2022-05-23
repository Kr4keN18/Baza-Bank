<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stanowisko extends Model
{
    use HasFactory;

    protected $table = 'stanowiskos';

    protected $fillable = [
        'id', 'nazwa', 'pensja'
    ];

    public function pracownicies(): HasMany
    {
        return $this->HasMany(Pracownicy::class);
    }


}
