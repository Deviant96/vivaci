@extends('layouts.layout')

@section('style')
<style>
    .card .card-img-top {
        object-fit: cover;
    }

    .member-img-container {
        max-height: 350px;
    }
    .member-img {
        width: 100%;
    }
    @media (min-width:1200px) {
        .card .card-img-top {
            max-height: 350px;
        }
    }
    @media (max-width:1200px) {
        .card .card-img-top {
            max-height: 215px;
        }
    }
    /* @media (max-width:992px) {
        .member-img-container {
            max-height: 350px;
        }
    }
    @media (max-width:768px) {
        .member-img-container {
            max-height: 247px;
        }
    }
    @media (max-width:576px) {
        .member-img-container {
            max-height: 350px;
        }
    } */
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
        <div class="container mt-0 mt-sm-5 py-5">

            <div class="row g-5">

                @foreach ($category as $project)
                    <div class="col-12 col-sm-6">
                        <div class="card h-100">
                            <img src="{{ Voyager::image($project->image) }}" class="card-img-top" alt="">

                            <div class="card-body">
                                <h3 class="card-title">{{ $project->title }}</h3>
                                <p class="card-text">{!! $project->desc !!}</p>

                                <a href="{{ url()->current() }}/{{ $project->slug }}" class="stretched-link">View</a>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
@endsection
