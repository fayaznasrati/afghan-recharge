<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bundle extends Model
{
    use HasFactory;

    protected $fillable = [
        'operator',
        'bundleType',
        'pakName_en',
        'pakName_ps',
        'pakName_fa',
        'price',
        'quota',
        'code',
        'pakDetails_en',
        'pakDetails_ps',
        'pakDetails_fa',
        'status',
        'validity',

    ];

    public function bundleactivation(): HasMany
    {
        return $this->hasMany(BundleActivation::class);
    }
}

