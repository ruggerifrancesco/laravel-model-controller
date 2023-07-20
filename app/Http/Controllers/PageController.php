<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home () {
        $movies = Movie::all();

        return view('home', compact('movies'));
    }
}
