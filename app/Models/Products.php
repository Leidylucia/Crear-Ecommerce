<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $guarded=['id','created_at','updated_at'];
    /* Relacion 1 a muchos */
    public function sizes(){
        return $this->hasMany(Size::class);
    }
    /* Relacion uno a muchos inversa */
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
    /* Relacion muchos a muchos */
    public function colors(){
        return $this->belongsToMany(Color::class);
    }
    /* Relacion 1 a muchos polimorfica */
    public function image(){
        return $this->morphMany(Image::class,"imageable");
    }
}
