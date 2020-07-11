<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $guarded = [];

    public function items()
    {
        return $this->hasMany('App\Items');
    }
}
