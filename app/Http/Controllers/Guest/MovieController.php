<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Model
use App\Models\Movie;

class MovieController extends Controller
{
     public function index()
    {
        $movies = Movie::all();
        return view('index', compact('movies'));
    }
}
