<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class promotion extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product() {
        return $this->belongsToMany(Product::class); // Relation plusieurs à plusieurs, une promotion à plusieurs produits 
    }
}
