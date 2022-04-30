<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //enable massive allocation
    protected $fillable = ['name', 'slug', 'image', 'icon'];

    //Generating relations

    //Relation 1 to n
    public function subcategories() {
        return $this->hasMany(Subcategory::class);
    }

    //Relation n to n
    public function brands() {
        return $this->belongsToMany(Brand::class);
    }

    //Relation 1 to n through
    public function products() {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

    //URL Friendly
    public function getRouteKeyName() {
        return 'slug';
    }
}
