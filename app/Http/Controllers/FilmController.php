<?php

namespace App\Http\Controllers;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    function index()
    {
        $films = Film::all();
            return view('films.index',['films' => $films]);
    }

    function create()
    {
         return view('films.create');
    }
    function store(Request $request)
    {
        $film = new Film();
        $film->title = $request->title;
        $film->year = $request->year;
        $film->duration = $request->duration;
        $film->save();
        return redirect('/films');
    }

    function about()
    {
        return "About the amazing film app";
    }
}