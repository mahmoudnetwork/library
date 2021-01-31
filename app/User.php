<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'password','phone','img'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

         public function setImgAttribute($value){
         $img_name = time().rand(0,999).'.'.$value->getClientOriginalExtension();
         $value->move(public_path('/user/images'),$img_name);
         $this->attributes['img']= $img_name ;
      }

      public function setPasswordAttribute($value){
        $this->attributes['password']= Hash::make($value);
      }
}
