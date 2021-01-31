<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
  public $timestamps = false;
  protected $primaryKey = 'code_number';
 protected $fillable = [
     'name', 'auther', 'code_number','pubisher','img','quntity'
 ];

 public function setImgAttribute($value){
 $img_name = time().rand(0,999).'.'.$value->getClientOriginalExtension();
 $value->move(public_path('/user/images'),$img_name);
 $this->attributes['img']= $img_name ;
}

public function borrow(){
  return $this->hasMany('App\borrow_book','book_code','code_number');
}

}
