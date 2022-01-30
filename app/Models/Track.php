<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $fillable = [
        'track',
        'customer_id',
        'stage',
        'date_text',
        'problem_text',
        'update'
    ];
}
