<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function portfolio()
    {
        return $this->belongsToMany('App\Portfolio', 'portfolio_tag' , 'tag_id', 'portfolio_id');
    }
}
