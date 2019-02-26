<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $fillable = [
      'image','product_id'
  ];

  public function Product()
  {
    return $this->belongsTo('App\Product','product_id');

  }





      public function  setImageAttribute($photo){

        if($photo){
                    $destinationPath = 'upload/products' ;
                    $filename=str_random(3).'_ImageC_'.str_random(3);
                    $photo->move($destinationPath,$filename);
                    $finel=$destinationPath.'/'.$filename;
                    $this->attributes['image']=$finel;
                  }

      }


}
