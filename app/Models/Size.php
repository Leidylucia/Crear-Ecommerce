<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable=['name','product_id'];
    /* Relacion 1 a muchos inversa */
    public function product(){
        return $this->belongsTo(Products::class);
    }

    /* Relacion muchos a muchos */
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

}
