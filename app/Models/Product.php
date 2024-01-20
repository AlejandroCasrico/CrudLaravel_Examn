<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product',
        'type',
        'stock',
        'expiration_date',
        'supplier_id'
    ];
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}