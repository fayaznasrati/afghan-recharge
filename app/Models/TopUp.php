<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TopUp extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'currancyType',
        'phone',
        'email',
        'sender_phone'
    ];

    public function bundle(): BelongsTo
    {
        return $this->belongsTo(Bundle::class);
    }
}
