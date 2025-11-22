<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductClick extends Model
{
    protected $fillable = [
        'product_id',
        'ip_address',
        'clicked_at'
    ];

    protected $casts = [
        'clicked_at' => 'datetime'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}