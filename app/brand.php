<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{

  public $fillable = [  'name_tr', 'name_ar', 'name_en'];

  public function Category()
  {
     return $this->belongsToMany('App\Category','brand_categories');
  }

   public function Type()
   {
       return $this->hasMany('App\Type');
   }
}
