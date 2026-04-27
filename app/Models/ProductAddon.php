<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductAddon extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'description',
        'price',
        'price_type',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    public function getDisplayPriceAttribute()
    {
        $priceTypes = [
            'per_hour' => '/hour',
            'per_month' => '/month',
            'per_day' => '/day',
            'per_page' => '/page',
            'one_time' => ' (one-time)',
        ];

        $suffix = $priceTypes[$this->price_type] ?? '';

        return '$' . number_format($this->price, 2) . $suffix;
    }
}
