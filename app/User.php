<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $fillable = array('email','password','active');

    public function profile(){
        return $this->hasOne('Profile');
    }
}
