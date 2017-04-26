<?php

namespace App\Http\Controllers;

use App\Project;
use App\Link;

class HomeController extends Controller
{
    public function index()
    {
        $links = Link::all();
        $projects = Project::all();
        return view('welcome', [
            'links' => $links,
            'projects' => $projects,
        ]);
    }
}
