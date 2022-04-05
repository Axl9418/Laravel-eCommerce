<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //status of the products
    const DRAFT = 0;
    const PUBLISHED = 1;

    //unable massive allocation
    protected $guarder = ['id', 'created_at', 'updated_at'];

    //Relation 1 to n
    public function sizes() {
        return $this->hasMany(Size::class);
    }

    //Relation 1 to n inverse
    public function brands() {
        return $this->belongsTo(Brand::class);
    }

    //Relation 1 to n inverse
    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }

    //Relation n to n
    public function colors() {
        return $this->belongsToMany(Color::class);
    }

    //Relation 1 to n polimorph
    public function images() {
        return $this->morphMany(Image::class, "imageable");
    }

}
