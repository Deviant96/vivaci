<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;

class ProjectsController extends Controller
{
    // https://github.com/the-control-group/voyager/issues/1153
    // https://stackoverflow.com/questions/33003097/dynamic-routing-in-laravel-5-application
    public function index()
    {
        $project = Project::where('slug', '/')->first(); //->where('active', 1)->first();
        return view('project')->with('project', $project);
    }

    public function getProjectType($slug = null, $proj = null)
    {
        if (!is_null($proj)) {
			$category = ProjectCategory::with('projects')
										->where('slug', $slug)
										->get();

			$project = Project::whereBelongsTo($category, 'category')
								->where('slug', $proj)
								->get()
								->firstOrFail();
			
            return view('project')->with('project', $project);
        } else {
            $projects = ProjectCategory::where('slug', $slug)
			->reorder('id', 'asc')
										->first();

            $category = $projects->projects;

            return view('projects')->with('projects', $projects)
									->with('category', $category);
        }
    }

    public function getProject($slug = null)
    {
        $project = Project::where('slug', $slug); // ->where('status', 'active');
        $project = $project->firstOrFail();

        // return view($page->template)->with('page', $page);
        return view('project')->with('project', $project);
    }
}
