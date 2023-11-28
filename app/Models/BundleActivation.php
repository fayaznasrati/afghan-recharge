<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BundleActivation extends Model
{
    use HasFactory;
    protected $fillable = [
        'bundle_id',
        'phone',
        'email',
        'price',
        'sender_phone'
    ];

    public function bundle():BelongsTo
    {
        return $this->belongsTo(Bundle::class);
    }
}
