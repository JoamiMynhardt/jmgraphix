<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    protected $fillable = [
    'portfolio_id',
    'filenames',
    ];

    public function Portfolio()
    {
        return $this->belangsTo('App\Portfolio', 'portfolio_entires', 'portfolio_id');
    }
}
