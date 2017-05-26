<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $fillable = ['email','password','active'];
    protected $hidden = ['password'];

    public function profile(){
        return $this->hasOne('App\Profile');
    }

    public function roles(){
        return $this->belongsToMany('App\Role')->withTimeStamps();
    }
}
