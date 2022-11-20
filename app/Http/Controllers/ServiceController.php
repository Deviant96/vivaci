<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //
    public function index()
	{
        $service = Service::findOrFail(1)->get();
		return view('services', ['em' => $service]);
	}

    public function getService($slug = null)
	{
        $service = Service::where('slug', $slug); // ->where('status', 'active');
		$service = $service->firstOrFail();

		// return view($page->template)->with('page', $page);
		return view('service')->with('service', $service);
	}
}
