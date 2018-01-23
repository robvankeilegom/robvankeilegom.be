<?php

namespace App\Http\Controllers;

use App\Project;
use App\HeaderData;

class ProjectsController extends Controller
{
    public function index()
    {
        $headerData = HeaderData::with('links')->find(1);
        $projects = Project::with('links')->orderBy('views', 'DESC')->get();
        return view('projects', [
            'headerData' => $headerData,
            'projects' => $projects,
        ]);
    }

    public function modal($projectId)
    {
        $project = Project::with('links')->find($projectId);
        $project->increment('views');
        return view('parts.projectModal', [
            'project' => $project,
        ]);
    }
}
