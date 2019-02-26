<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
     const ADMIN_TYPE = 1;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
    'name', 'email', 'password','phone','image','country_id'
];


// public function  setImageAttribute($photo){
//
//     if($photo){
//
//                 $destinationPath = 'upload/users' ;
//                 $filename=str_random(3).'_Image_'.str_random(3);
//                 $photo->move($destinationPath,$filename);
//                 $finel=$destinationPath.'/'.$filename;
//                 $this->attributes['image']=$finel;
//               }
//
//   }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()    {
    return $this->role === self::ADMIN_TYPE;
    }

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }
}
