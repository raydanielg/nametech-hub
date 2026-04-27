<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalStudioProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_type',
        'complexity',
        'min_price',
        'max_price',
        'typical_timeline',
        'description',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'min_price' => 'decimal:2',
        'max_price' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByComplexity($query, $complexity)
    {
        return $query->where('complexity', $complexity);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('project_type');
    }

    public function getPriceRangeAttribute()
    {
        if ($this->min_price == $this->max_price) {
            return '$' . number_format($this->min_price, 2);
        }

        return '$' . number_format($this->min_price, 2) . ' – $' . number_format($this->max_price, 2);
    }

    public function getDisplayPriceRangeAttribute()
    {
        if ($this->max_price >= 100000) {
            return $this->getPriceRangeAttribute() . '+';
        }

        return $this->getPriceRangeAttribute();
    }
}
