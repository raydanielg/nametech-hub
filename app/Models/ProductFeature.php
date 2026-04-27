<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_plan_id',
        'name',
        'description',
        'is_included',
        'icon',
        'sort_order',
        'metadata',
    ];

    protected $casts = [
        'is_included' => 'boolean',
        'metadata' => 'array',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function productPlan(): BelongsTo
    {
        return $this->belongsTo(ProductPlan::class);
    }

    public function scopeIncluded($query)
    {
        return $query->where('is_included', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }
}
