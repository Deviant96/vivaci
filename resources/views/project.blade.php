@extends('layouts.layout')

{{-- Image zooming component --}}
@php($imageZoom = true)

@section('style')
<style>
    .banner-img-container {
        height: 300px;
    }
    @media (max-width:576px) {
        .banner-img-container {
            height: 170px;
            background-position: bottom;
        }
    }
    .banner-img {
            background-size:cover;
            background-position: center;
            background-repeat:no-repeat;
            background-attachment: fixed;
        }
    @media (max-width:576px) {
        .banner-img {
            background-position: bottom;
        }
    }

    .project-img-container {
        height: 240px;
    }
    @media (max-width:1200px) {
        .project-img-container {
            height: 150px;
        }
    }
    @media (max-width:576px) {
        .project-img-container {
            height: 120px;
        }
    }
    .project-img {
        object-fit: cover;
    }
</style>
@endsection

@section('content')
    <section>
        <div class="container top-margin">

            <div class="row py-3 mt-3">
                <div class="col-12 col-sm-6 d-sm-flex flex-column justify-content-end">
                    <h2 class="fw-bold">{{ $project->title }}</h2>
                    <div class="mb-0">{!! $project->desc !!}</div>
                </div>
                <div class="col-12 col-sm-6 d-sm-flex justify-content-end align-items-end">
                    <div class="text-sm-end">
                        <div>
                            <h4 class="fw-bold">{{ $project->location }}</h4>
                        </div>
                        <div>
                            <p class="text-muted">{{ $project->date }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 p-0 banner-img-container">
                    <div class="h-100 banner-img"
                        style="background-image: url({{ Voyager::image($project->image) }});">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container">

            <div class="row">
                <div class="col-12 py-5 p-sm-5">
                    <h2>Gallery</h2>
                    <div class="row gy-3">
                        <?php $images = json_decode($project->images); ?>
                        @foreach ($images as $image)
                            <div class="col-6 col-sm-4 project-img-container">
                                <img class="h-100 w-100 project-img" src="{{ Voyager::image($image) }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
