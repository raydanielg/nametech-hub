<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'slug',
        'description',
        'price_monthly',
        'price_annual',
        'setup_fee',
        'equity_percentage',
        'revenue_share_percentage',
        'payment_model',
        'target_audience',
        'is_popular',
        'is_active',
        'sort_order',
        'metadata',
    ];

    protected $casts = [
        'price_monthly' => 'decimal:2',
        'price_annual' => 'decimal:2',
        'setup_fee' => 'decimal:2',
        'equity_percentage' => 'decimal:2',
        'revenue_share_percentage' => 'decimal:2',
        'is_popular' => 'boolean',
        'is_active' => 'boolean',
        'metadata' => 'array',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function features(): HasMany
    {
        return $this->hasMany(ProductFeature::class)->orderBy('sort_order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopePopular($query)
    {
        return $query->where('is_popular', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    public function getDisplayPriceAttribute()
    {
        if ($this->price_monthly && $this->price_annual) {
            return [
                'monthly' => $this->price_monthly,
                'annual' => $this->price_annual,
                'annual_savings' => $this->price_monthly * 12 - $this->price_annual,
            ];
        }

        if ($this->price_monthly) {
            return ['monthly' => $this->price_monthly];
        }

        if ($this->price_annual) {
            return ['annual' => $this->price_annual];
        }

        if ($this->setup_fee) {
            return ['setup_fee' => $this->setup_fee];
        }

        return null;
    }
}
