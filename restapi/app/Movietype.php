<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movietype extends Model
{
    protected $fillable = [ 'type','movie_id' ];
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}