<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable =['url','imageable_id','imageable_type'];

    /* Relacion polimorfica */
    public function imageable(){
        return $this->morphTo();
    }
}