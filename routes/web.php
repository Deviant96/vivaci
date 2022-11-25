<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('main');
// });
Route::get('/', 'App\Http\Controllers\HomeController@index');

// Route::get('/projects', function () {
//     return view('projects');
// });
// Route::get('/projects/{slug}', 'App\Http\Controllers\ProjectsController@getProjectType')->where('slug', '([A-Za-z0-9\-\/]+)');
Route::get('/projects/{slug}/{title?}', 'App\Http\Controllers\ProjectsController@getProjectType')->name('projects');//->where('slug', '([A-Za-z0-9\-\/]+)');

// Route::controller(ProjectsController::class)->group(function () {
//     Route::get('/projects/{slug}', 'getProjectType')->where('slug', '([A-Za-z0-9\-\/]+)');
//     Route::get('/projects/{slug}/{title}', 'getProject')->where('title', '([A-Za-z0-9\-\/]+)');
// });

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::get('/about', function () {
//     // return view('about');
//     return view('abt');
// });

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::controller(EmployeeController::class)->group(function () {
    Route::get('/about', 'index')->name('about');
    Route::get('/about/{team}', 'getEmployee')->where('title', '([A-Za-z0-9\-\/]+)')->name('about.team');
});

// Route::get('/about-team', function () {
//     return view('about-team');
// });

Route::get('/service', 'App\Http\Controllers\ServiceController@index');
Route::get('/service/{slug}', 'App\Http\Controllers\ServiceController@getService')->where('slug', '([A-Za-z0-9\-\/]+)');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// Catch all page controller (place at the very bottom)
// Route::get('{slug}', [
// 	'uses' => 'ProjectsController@getProject'
// ])->where('slug', '([A-Za-z0-9\-\/]+)');

// Route::get('/cart', 'CartController@index')->name('cart.index');
// Route::get('/project/{project}', 'App\Http\Controllers\ProjectsController@getProject')->where('project', '([A-Za-z0-9\-\/]+)');
//->name('cart.store');