<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    //enable massive allocation
    protected $fillable = ['name'];

    //Relation 1 to n
    public function products() {
        return $this->hasMany(Product::class);
    }

    //Relation n to n
    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
