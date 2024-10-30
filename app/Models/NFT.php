<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NFT extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'owner_id',
        'supply',
        'price',
        'sale_status',
    ];
}
