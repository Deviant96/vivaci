@extends('layouts.layout')

@section('content')
    <?php
    $projects = App\Models\Project::all();
    ?>

    <div class="container">

        <div class="row">

            @foreach ($projects as $project)
                <div class="col">
                    <div class="card">
                        <img src="storage/{!! $project->image !!}" class="card-img-top" alt="">

                        <div class="card-body">
                            <h5 class="card-title">{!! $project->title !!}</h5>
                            <p class="card-text">{!! $project->desc !!}</p>

                            <a href="project/{{ $project->slug }}" class="btn btn-primary btn-sm">View</a>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
