<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{





    public $fillable = [  'name_tr', 'name_ar', 'name_en','parent_id','image'];

    /*************************************/
    /*************************************/
    public function  setImageAttribute($photo){

      if($photo){
                  $destinationPath = 'upload/Category' ;
                  $filename=str_random(3).'-'.$photo->getClientOriginalName();
                  $photo->move($destinationPath,$filename);
                  $finel=$destinationPath.'/'.$filename;
                  $this->attributes['image']=$finel;
                }

    }

    /*************************************/
    /*************************************/
    public function Parent()
   {
       return $this->belongsTo('App\Category');
   }

   /*************************************/
   /*************************************/
    public function childs() {
        return $this->hasMany('App\Category','parent_id','id') ;
    }
    /*************************************/
    /*************************************/
    public function TextTrans($text)
    {
        $locale=\App::getLocale();
        $column=$text.'_'.$locale;

        return $this->{$column};
    }
}
