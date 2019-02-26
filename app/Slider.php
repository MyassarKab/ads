<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{

      public $fillable = [  'name_tr', 'name_ar', 'name_en','image'];

      public function  setImageAttribute($photo){

        if($photo){

            $PhotoExtension=pathinfo($photo->getClientOriginalName());

                    $destinationPath = 'upload/slider' ;
                    $filename=str_random(3).'Image.'.$PhotoExtension['extension'];
                    $photo->move($destinationPath,$filename);
                    $finel=$destinationPath.'/'.$filename;
                    $this->attributes['image']=$finel;
                  }

      }
}
