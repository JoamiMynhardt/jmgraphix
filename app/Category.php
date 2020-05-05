<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // To connect it to the categories table
    protected $table = 'categories';

    // Connection it to Portfolio Model
    // This is called 1 to many relationships
    public function portfolio()
    {
        return $this->hasMany('App\Portfolio');
    }
}
