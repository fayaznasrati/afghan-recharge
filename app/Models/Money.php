<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Money extends Model
{
    use HasFactory;

    protected $fillable=['amount', 'currancy_id'];


    public function currancy():BelongsTo
    {
       return $this->belongsTo(Currancy::class);
    }
}
