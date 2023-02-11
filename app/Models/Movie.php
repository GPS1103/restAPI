<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'country',
        'description',
    ];
    protected $casts = [
        'title' => 'string',
        'country' => 'string',
        'description' => 'string',
    ];

    public function movieTypes(): BelongsToMany
    {
        return $this->belongsToMany(MovieType::class);
    }
}
