<?php

namespace App\Http\Controllers;

use App\Project;
use App\HeaderData;

class HomeController extends Controller
{
    public function index()
    {
        $headerData = HeaderData::with('links')->find(1);
        $projects = Project::with('links')->get();
        return view('welcome', [
            'headerData' => $headerData,
            'projects' => $projects,
        ]);
    }
}
