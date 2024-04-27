<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merchant extends Model
{
    use HasFactory, Softdeletes;

    protected $fillable = [
        'name',
        'phone',
        'store_name',
        'store_description',
        'address',
        'state',
        'country',
        'city',
        'image',
        'longitude',
        'latitude',
    ];

    public function vouchers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Voucher::class);
    }
}
