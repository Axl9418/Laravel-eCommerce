<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    //enable massive allocation
    protected $fillable = ['name', 'product_id'];

    //Relation 1 to n inverse
    public function product() {
        return $this->belongsTo(Product::class);
    }

    //Relation n to n
    public function colors() {
        return $this->hasMany(Color::class);
    }
}
