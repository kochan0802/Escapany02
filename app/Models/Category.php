<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function coaches()
    {
        return $this->hasMany('App\Coach');
    }
}