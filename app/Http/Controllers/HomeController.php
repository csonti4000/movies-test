<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $movies = Movie::all();
        return view('pages.home', compact('movies'));
    }

    public function movie(Movie $movie)
    {
        return view('pages.movie', compact('movie'));
    }
}
