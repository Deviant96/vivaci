<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    //
    public function index()
    {
        // $team = Team::select('title')->get();
        $service = Project::findOrFail(1)->get();
        return view('main')->with('main', $service);
    }
}
