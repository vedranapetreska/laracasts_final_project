<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag) //jobs for this tag
    {
        return view('results', ['jobs' => $tag->jobs->load(['employer', 'tags'])]);
    }
}
