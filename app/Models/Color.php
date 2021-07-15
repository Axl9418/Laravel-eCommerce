<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    //enable massive allocation
    protected $fillable = ['name'];

    //Relation n to n
    public function products() {
        return $this->belongsToMany(Product::class);
    }

    //Relation n to n
    public function sizes() {
        return $this->belongsToMany(Size::class);
    }
}
