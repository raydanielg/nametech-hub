<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'slug',
        'description',
        'founder_id',
        'primary_contact_user_id',
        'cohort_id',
        'industry',
        'status',
        'progress',
        'website',
        'funding_status',
        'team_size',
        'total_funding_raised',
        'mrr',
        'active_users',
        'monthly_growth_rate',
    ];
}
