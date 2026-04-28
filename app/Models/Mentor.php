<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'user_id',
        'expertise_areas',
        'years_of_experience',
        'current_role',
        'company',
        'max_startups',
        'is_active',
        'bio',
        'linkedin_url',
    ];

    protected $casts = [
        'expertise_areas' => 'array',
        'availability' => 'array',
        'is_active' => 'boolean',
    ];
}
