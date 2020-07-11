<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "pertanyaans";

    protected $guarded = [];

    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'pertanyaan_tag', 'pertanyaan_id', 'tag_id');
    }
}
