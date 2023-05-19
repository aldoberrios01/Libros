<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function authors()
    {
        return $this->belongsToMany(
            Author::class,
            'book_authors'
        );
    }

    public function genres()
    {
        return $this->belongsToMany(
            Genre::class,
            'book_genres'
        );
    }

    public function editions()
    {
        return $this->hasMany(
            Edition::class
        );
    }

    public function latestEdition()
    {
        return $this->hasOne(Edition::class)->latest();
    }
}
