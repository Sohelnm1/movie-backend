<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movies';
    protected $fillable = ['original_language','original_title','overview','popularity','backdrop_path','poster_path','release_date','title','vote_average','vote_count'];
}