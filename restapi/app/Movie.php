<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{ 
    protected $fillable = [
        'title', 'country', 'description','cover'
    ];
    public function movietypes()
    {
        return $this->hasMany(Movietype::class);
    }
}