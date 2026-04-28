<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorSession extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'mentor_id',
        'startup_id',
        'mentee_id',
        'topic',
        'description',
        'session_date',
        'start_time',
        'end_time',
        'status',
        'meeting_link',
        'mentor_notes',
        'mentee_feedback',
    ];

    protected $casts = [
        'session_date' => 'date',
    ];
}
