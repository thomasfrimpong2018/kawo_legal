<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
      //Table Name
      protected $table ="comments";
      //Primary Key
      public $primaryKey='id';
     //Timestamp
     public $timestamp =true;
}
