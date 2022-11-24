<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Team;

class EmployeeController extends Controller
{
    
    public function index()
	{
		$employee = Team::get(); //->where('active', 1)->first();
		return view('about')->with('employee', $employee);
	}

	public function getEmployee($team = null)
	{
		// $employee = Employee::where('team', 'design'); // ->where('status', 'active');
		// $employee = $employee->firstOrFail();
		$details = Team::where('slug', $team)->firstOrFail();
        $employee = Employee::where('team', $team)->orderBy('order', 'asc')->get();

		// return view($page->template)->with('page', $page);
        // $project = Project::where('slug', $team); // ->where('status', 'active');
		// $employee = $employee->findOrFail(1);

		// return view($page->template)->with('page', $page);
		return view('aboutteam', ['em' => $employee])->with('details', $details);
	}
}
