<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    public function tracks(): HasMany
    {
        return $this->hasMany(Track::class);
    }

    protected $fillable = [
        'name',
        'e-mail',
        'invoice_url',
        'order_id'
    ];


}
