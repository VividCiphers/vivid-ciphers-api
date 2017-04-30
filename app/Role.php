<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     protected $fillable = array('role_name','active');
     
     public function users() {
         return $this->belongsToMany('App\User')->withTimestamps();
     }
}
