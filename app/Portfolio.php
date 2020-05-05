<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    protected $table = 'portfolio_entries';
    protected $fillable = [
    'title',
    'slug',
    'description',
    ];

    // Connecting this to the Category Model
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'portfolio_tag');
    }

    public function photo()
    {
        return $this->hasMany('App\Photo', 'portfolio_id');
    }

}
