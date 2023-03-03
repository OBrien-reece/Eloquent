<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies_Actors extends Model
{
    use HasFactory;

    protected $fillable = ['actor_id', 'movie_id'];
}