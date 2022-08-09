<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{

    protected $fillable = ["material_id",'remainder', 'created_at', 'updated_at'];


    public function materials() {
        return   $this->hasMany(Product::class, 'material_id', 'id');
    }
}
