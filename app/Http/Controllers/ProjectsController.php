<?php

namespace App\Http\Controllers;

use App\Project;
use App\HeaderData;

class ProjectsController extends Controller
{
    public function index()
    {
        $headerData = HeaderData::with('links')->find(1);
        $projects = Project::with('links')->get();
        return view('projects', [
            'headerData' => $headerData,
            'projects' => $projects,
        ]);
    }
}
