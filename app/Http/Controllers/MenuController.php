<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class MenuController extends Controller
{
    //

        // ::select('title')
        public function index()
        {
            $team = Team::select('title')->get();
            return view('services', ['em' => $team]);
        }
    
        public function getService($slug = null)
        {
            $service = Service::where('slug', $slug); // ->where('status', 'active');
            $service = $service->firstOrFail();
    
            // return view($page->template)->with('page', $page);
            return view('service')->with('service', $service);
        }
}
