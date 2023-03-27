<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
