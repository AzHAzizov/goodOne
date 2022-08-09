<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ["name", 'created_at', 'updated_at'];


    public function materials() 
    {
        return $this->belongsToMany(Material::class, "material_products")
        ->withPivot(['quantity']);
    }
}
