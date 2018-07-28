<?php

namespace App\Http\Controllers;

use App\Project;
use App\HeaderData;
use Spatie\Tags\Tag;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::with('links')->orderBy('highlight', 'DESC')->orderBy('views', 'DESC')->get();
        return view('projects', [
            'projects' => $projects,
            'allTags' => Tag::all(),
            'currentTag' => null,
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

    public function tag($tag) {
        $projects = Project::withAllTags([$tag])->orderBy('highlight', 'DESC')->orderBy('views', 'DESC')->get();
        return view('projects', [
            'projects' => $projects,
            'allTags' => Tag::all(),
            'currentTag' => $tag,
        ]);
    }
}
