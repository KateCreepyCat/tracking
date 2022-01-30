<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'e-mail',
        'invoice_url',
        'order_id'
    ];

    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
}
