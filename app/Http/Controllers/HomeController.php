<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;

class HomeController extends Controller
{
    //
    public function index()
    {
        // $category = ProjectCategory::with('projects')
		// 								->get();

        // $projects = Project::whereBelongsTo($category, 'category')
        //                     ->skip(0)->take(3)
        //                     ->get();

        $projects = Project::with('category')
                            ->orderBy('created_at', 'desc')
                            ->skip(0)
                            ->take(3)
                            ->get();

        // $team = Team::select('title')->get();
        // $projects = Project::findOrFail(1)->skip(0)->take(3)->get();
        return view('main')->with('projects', $projects);
    }
}
