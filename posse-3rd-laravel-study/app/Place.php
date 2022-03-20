<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    public function questions(){
        return $this->hasMany('App\Question');
    }

    protected $fillable = ['name'];
}

