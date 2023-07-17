<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class); // Un produit n'a que une catégorie
    }

    public function promotions() {
        return $this->belongsToMany(Promotion::class); // Relation plDes produits ont plusieurs promotions 
    } 

    public function users() {
        return $this->hasMany(User::class); // Un produit à plusieurs utilisateurs
    }
}
