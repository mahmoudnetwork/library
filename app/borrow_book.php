<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class borrow_book extends Model
{
  public $timestamps = false;

  protected $fillable = [
      'student_id', 'student_name', 'book_code','contact'
  ];

  public function book(){
    return $this->belongsTo('App\book','book_code','code_number');
  }
}
