<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'target_users',
        'category',
        'icon',
        'image',
        'has_free_option',
        'is_active',
        'sort_order',
        'metadata',
    ];

    protected $casts = [
        'has_free_option' => 'boolean',
        'is_active' => 'boolean',
        'metadata' => 'array',
    ];

    public function plans(): HasMany
    {
        return $this->hasMany(ProductPlan::class)->orderBy('sort_order');
    }

    public function features(): HasMany
    {
        return $this->hasMany(ProductFeature::class)->orderBy('sort_order');
    }

    public function addons(): HasMany
    {
        return $this->hasMany(ProductAddon::class)->orderBy('sort_order');
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(ProductFaq::class)->orderBy('sort_order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }
}
