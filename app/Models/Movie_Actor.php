<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie_Actor extends Model
{
    use HasFactory;

    protected $fillable = ['actor_id', 'movie_id'];
}
