<?php

namespace App\Http\Controllers;

use App\Project;

class HomeController extends Controller
{
    public function index()
    {
        $links = [];
        $projects = Project::all();
        return view('welcome', [
            'links' => $links,
            'projects' => $projects,
        ]);
    }
}
