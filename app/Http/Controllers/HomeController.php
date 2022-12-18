<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Team;

class HomeController extends Controller
{
    //
    public function index()
    {
        $categories = ProjectCategory::with('projects')
		 								->get();

        // $projects = Project::whereBelongsTo($category, 'category')
        //                     ->skip(0)->take(3)
        //                     ->get();

        $projects = Project::with('category')
                            ->whereIn('id', [11, 14, 15]) // Find specific project by ID for Kelapa Gading, Puri Kencana and Meiling lee clinic; because of client's request
                            // ->orderBy('created_at', 'desc')
                            // ->skip(0)
                            // ->take(3)
                            ->get();

        $teams = Team::get();

        // $team = Team::select('title')->get();
        // $projects = Project::findOrFail(1)->skip(0)->take(3)->get();
        return view('main')->with('projects', $projects)->with('categories', $categories)->with('teams', $teams);
    }
}
