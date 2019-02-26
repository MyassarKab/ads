<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Product extends Model
{
  protected $fillable = [
      'name_tr', 'name_ar', 'name_en','user_id','category_id','brand_id','type_id','country_id','image','price','description_ar','description_tr','description_en','expiry_date','urgently_kind','adress','status_en','status_ar','status_tr','negotiable'
  ];

  public function Owner()
  {
    return $this->belongsTo('App\User','user_id');
  }

  public function Category()
  {
    return $this->belongsTo('App\Category','category_id');
  }


    public function Brand()
    {
      return $this->belongsTo('App\brand','brand_id');
    }

    public function Type()
    {
      return $this->belongsTo('App\Type','type_id');
    }

    public function Country()
    {
      return $this->belongsTo('App\Country','country_id');
    }

    public function Images(){
      return $this->hasMany('App\Image', 'product_id');
    }

      public function  setImageAttribute($photo){

        if($photo){
                    $destinationPath = 'upload/products' ;
                    $filename=str_random(3).'_Image_'.str_random(3);
                    $photo->move($destinationPath,$filename);
                    $finel=$destinationPath.'/'.$filename;
                    $this->attributes['image']=$finel;
                  }

      }
      public function TextTrans($text)
      {
          $locale=\App::getLocale();
          $column=$text.'_'.$locale;

          return $this->{$column};
      }

}
