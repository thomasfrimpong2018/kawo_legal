<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StartUp extends Model
{
      //Table Name
      protected $table ="start_ups";
      //Primary Key
      public $primaryKey='id';
     //Timestamp
     public $timestamp =true;

     public function user(){
           return $this->belongsTo('App\User');
     }

}
