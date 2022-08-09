<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ["name", 'created_at', 'updated_at'];

    public function products() 
    {
        return $this->belongsToMany(Product::class, "material_products");
    }
}
