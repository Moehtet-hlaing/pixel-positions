<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function __invoke(Tag $tag){
        //jobs for the tag
        return view('results', ['jobs' => $tag->jobs]);
    }
}
