<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    public function moviestore(Request $request){
        $data = $request->all();
        $movie = Movie::create($data);

        return response()->json( ['message' => 'added sucessfully', 'data' => $movie], 201 );
    }
}