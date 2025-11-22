<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'shopee_link',
        'tokopedia_link',
        'lazada_link',
        'clicks'
    ];

    public function productClicks(): HasMany
    {
        return $this->hasMany(ProductClick::class);
    }
}