<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['first_name', 'last_name', 'biography', 'image_path', 'image_text', 'active'];

    public function user() {
        return $this->belongsTo('User');
    }
}
