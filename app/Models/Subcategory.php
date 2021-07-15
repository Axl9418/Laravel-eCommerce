<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    //unable massive allocation
    protected $guarder = ['id', 'created_at', 'updated_at'];

    //Relation 1 to n
    public function products() {
        return $this->hasMany(Product::class);
    }

      //Relation 1 to n inverse
      public function category() {
        return $this->belongsTo(Category::class);
    }
}
