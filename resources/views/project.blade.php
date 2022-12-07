@extends('layouts.layout')

{{-- Image zooming component --}}
@php($imageZoom = true)

@section('style')
    <style>
        .navbar:not(.nav-active) .navbar-nav > .nav-item > .nav-link {
            color: #ffffff;
        }
        .banner-img-container {
            height: 350px;
            overflow: hidden;
            position: relative;
        }

        @media (max-width:576px) {
            .banner-img-container {
                height: 170px;
                background-position: bottom;
            }
        }

        .banner-img {
            /* background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-attachment: fixed; */
            height: 100%;
            position: absolute;
            width: 100%;
            z-index: -1;
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
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 p-0 banner-img-container">
                    {{-- style="background-image: url({{ Voyager::image($project->image) }});filter:brightness(0.4);"> --}}
                    <div class="banner-img">
                        <img src="{{ Voyager::image($project->image) }}" alt="" class="position-absolute w-100"
                            style="top: 50%;left:0;transform:translateY(-50%);filter:brightness(0.4);" />
                    </div>

                    <div class="h-100 d-flex flex-column justify-content-center align-items-center text-light">
                        <h2 class="fw-bold m-0">{{ $project->title }}</h2>
                        @isset($project->desc)
                            <div class="mb-0">{!! $project->desc !!}</div>
                        @endisset
                        @isset($project->location)
                            <h4 class="fw-bold">{{ $project->location }}</h4>
                        @endisset
                        @isset($project->location)
                            <p class="text-muted">{{ $project->date }}</p>
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container">

            <div class="row">
                <div class="col-12 py-5 p-sm-5">
                    <h3 class="text-center mb-5">Gallery</h3>
                    <div class="row gy-3">
                        <?php $images = json_decode($project->images); ?>
                        @foreach ($images as $image)
                            <div class="col-6 col-sm-4 project-img-container">
                                <img class="h-100 w-100 project-img" alt="Image gallery of {{ $project->title }}" src="{{ Voyager::image($image) }}" loading="lazy" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
