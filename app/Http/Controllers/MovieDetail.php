<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieDetail extends Controller
{
    //
    public function moviedetail(Request $request, $id){
        $moviedetail = Movie::find($request->id);

        return response()->json([ 'message' => 'here is your data' , 'data' => $moviedetail ]);
    }
}