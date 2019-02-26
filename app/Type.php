<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
      public $fillable = [  'name_tr', 'name_ar', 'name_en','category_id','brand_id'];

      public function Category()
       {
           return $this->belongsTo('App\Category');
       }

     public function Brand()
      {
          return $this->belongsTo('App\Brand');
      }

}
