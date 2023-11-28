<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Currancy extends Model
{
    use HasFactory;

    protected $fillable = ['afghani', 'currancyType', 'currancy'];


    public function money():HasMany{
        return $this->hasMany(Money::class);
    }
}

