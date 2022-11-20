<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Employee;

class EmployeeController extends Controller
{
    
    public function index()
	{
		$employee = Employee::where('team', '/')->first(); //->where('active', 1)->first();
		return view('about-team')->with('about-team', $employee);
	}

	public function getEmployee($team = null)
	{
		// $employee = Employee::where('team', 'design'); // ->where('status', 'active');
		// $employee = $employee->firstOrFail();
        $employee = Employee::where('team', $team)->findOrFail(1)->get();

		// return view($page->template)->with('page', $page);
        // $project = Project::where('slug', $team); // ->where('status', 'active');
		// $employee = $employee->findOrFail(1);

		// return view($page->template)->with('page', $page);
		return view('aboutteam', ['em' => $employee]);
	}
}
