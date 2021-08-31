<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

protected $fillable = ['code','name','stock','image','price',
'status','category_id','provider_id',];


public function category(){

  return $this->belongsTo(Category::class);
}


public function provider(){

  return $this->belongsTo(Provider::class);
}



/*
public function purchase(){

  return $this->belongsTo(Product::class);
}
*/


/*
public function image(){

  return $this->morphOne(Image::class, 'imageable');
}

*/

}
