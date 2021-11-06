<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = ['name','email','rut','address','phone'];


    public function products(){


      return $this->hasMany(Product::class);
    }


    public function purchases(){



    return $this->belongsTo(Purchase::class);
}


}
