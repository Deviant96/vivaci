@extends('layouts.layout')

@section('style')
<style>
    .card .card-img-top {
        object-fit: cover;
        max-height: 400px;
        min-height: 400px;
    }
</style>
@endsection

@section('content')
    <section>
        <div class="container top-margin">
            <div class="row">
                <div class="col">
                    <h2>Our {{ $projects->title }} projects</h2>
                    <p class="mt-3">{{ $projects->description }}</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 py-5">

            <div class="row g-5">

                @foreach ($category as $project)
                    <div class="col-6">
                        <div class="card h-100">
                            <img src="{{ Voyager::image($project->image) }}" class="card-img-top" alt="">

                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <p class="card-text">{!! $project->desc !!}</p>

                                <a href="project/{{ $project->slug }}" class="btn btn-primary btn-sm">View</a>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
@endsection
