<?php

namespace App\Http\Controllers;

use App\Project;
use App\HeaderData;

class HomeController extends Controller
{
    public function index()
    {
        $headerData = HeaderData::find(1);
        $projects = Project::all();
        return view('welcome', [
            'headerData' => $headerData,
            'projects' => $projects,
        ]);
    }
}
