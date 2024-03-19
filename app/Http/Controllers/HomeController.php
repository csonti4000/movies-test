<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSaveRequest;
use App\Models\Contact;
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

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactSave(ContactSaveRequest $request)
    {
        Contact::create($request->validated());

        return view('pages.contact')->with('success', 'Üzenet sikeresen elküldve!');
    }
}
