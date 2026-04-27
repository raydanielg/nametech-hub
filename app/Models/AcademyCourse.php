<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'duration',
        'format',
        'price',
        'includes_certificate',
        'is_free',
        'is_bootcamp',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'includes_certificate' => 'boolean',
        'is_free' => 'boolean',
        'is_bootcamp' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFree($query)
    {
        return $query->where('is_free', true);
    }

    public function scopePaid($query)
    {
        return $query->where('is_free', false);
    }

    public function scopeBootcamp($query)
    {
        return $query->where('is_bootcamp', true);
    }

    public function scopeCourse($query)
    {
        return $query->where('is_bootcamp', false);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('title');
    }

    public function getDisplayPriceAttribute()
    {
        if ($this->is_free) {
            return 'Free';
        }

        return '$' . number_format($this->price, 2);
    }
}
