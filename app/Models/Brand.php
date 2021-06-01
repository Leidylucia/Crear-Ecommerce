<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Brand extends Model
{
    use HasFactory;
    
    protected $fillable=['name'];

    /* RELACION UNO A MUCHOS */
    public function products(){

        return $this->hasMany(Products::class);
    }
    /* RELACION DE MUCHOS A MUCHOS */

    public function categories(){

        return $this->belongsToMany(Category::class);
    }
    
}
