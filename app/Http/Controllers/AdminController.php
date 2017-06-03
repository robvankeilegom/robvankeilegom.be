<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\HeaderData;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.admin', [
        ]);
    }

    public function projects()
    {
        // todo return deleted too
        $projects = Project::all();
        return view('admin.projects', [
            'projects' => $projects,
        ]);
    }

    public function project(Request $request)
    {
        $project = Project::find($request->project_id);
        return view('admin.project', [
            'project' => $project,
        ]);
    }

    public function postProject(Request $request)
    {
    }
}
