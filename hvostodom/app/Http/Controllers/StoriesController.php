<?php

namespace App\Http\Controllers;

use App\Models\Stories;
use Illuminate\Http\Request;
use Symfony\Component\Translation\Catalogue\OperationInterface;

class StoriesController extends Controller
{
    public function showStories()
    {
        $stories = Stories::orderBy('created_at', 'desc')->get();

        return view('stories.stories', [
            'stories' => $stories
        ]);
    }

    public function storyDetails($story_alias){

        $stories = Stories::where('story_alias', $story_alias)->first()->get();

        return view('stories.details', [
            'stories' => $stories
        ]);
    }
}
