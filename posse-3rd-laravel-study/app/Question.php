<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    public function choices(){
        return $this->hasMany('App\Choice');
    }

    protected $fillable = ['image_url'];
}
