<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    // https://github.com/the-control-group/voyager/issues/1153
    // https://stackoverflow.com/questions/33003097/dynamic-routing-in-laravel-5-application
	public function index()
	{
		$project = Project::where('slug', '/')->first(); //->where('active', 1)->first();
		return view('project')->with('project', $project);
	}

	public function getProject($slug = null)
	{
		$project = Project::where('slug', $slug); // ->where('status', 'active');
		$project = $project->firstOrFail();

		// return view($page->template)->with('page', $page);
		return view('project')->with('project', $project);
	}
}
