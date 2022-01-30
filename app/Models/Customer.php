<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'e-mail',
        'invoice_url',
        'order_id'
    ];

    public function tracks(): HasOne
    {
        return $this->hasOne(Track::class);
    }

}
