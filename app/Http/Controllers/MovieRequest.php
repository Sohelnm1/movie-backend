<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieRequest extends Controller
{
    //
    public function movieget(){
        $data = Movie::all();
        return response()->json($data);
    }
}