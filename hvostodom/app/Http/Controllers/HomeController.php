<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Pet;
use App\Models\Stories;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $news = News::orderBy('updated_at')->take(3)->get();

        $pets = Pet::where('in_search', 1)->take(5)->get();

        $stories = Stories::orderBy('updated_at')->take(5)->get();

        return view('home.index', [
            'news' => $news,
            'pets' => $pets,
            'stories' => $stories
        ]);
    }
}
