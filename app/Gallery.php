<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    // To connect it to the categories table
    protected $table = 'portfolio_entries';
    protected $fillable = [
        'gallery',
        ];

        public function portfolio()
        {
            return $this->hasMany('App\Portfolio');
        }
}
