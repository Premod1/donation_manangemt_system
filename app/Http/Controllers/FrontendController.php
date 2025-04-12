<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $projects = Project::all();
        return view('frontend.home', compact('projects'));
    }

    public function donate(Project $project)
    {
        $projects = Project::all();
        return view('frontend.donate', compact('projects', 'project'));
    }
}
