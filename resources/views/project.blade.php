@extends('layouts.layout')

{{-- Image zooming component --}}
@php($imageZoom = true)
{{-- Masonry component --}}
@php($enableMasonry = true)

@section('style')
    <style>
        .navbar:not(.nav-active) .navbar-nav>.nav-item>.nav-link {
            color: #ffffff;
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
                <div class="col-12 p-0 banner-container">
                    {{-- style="background-image: url({{ Voyager::image($project->image) }});filter:brightness(0.4);"> --}}
                    <div class="banner-image">
                        <img src="{{ Voyager::image($project->image) }}" alt="" 
                            class="banner-image__img"
                            style="filter:brightness(0.4);" />
                    </div>

                    <div class="container banner-text h-100 d-flex flex-column justify-content-center align-items-center text-light"
                        data-aos="fade-down">
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
                    <h3 class="text-center mb-5" data-aos="fade-left">Gallery</h3>
                    <div class="row gy-3 grid">
                        <?php $images = json_decode($project->images); ?>
                        @php($counter = 10)
                        @foreach ($images as $image)
                            <div class="col-6 col-sm-4 grid-item">
                                <img class="h-100 w-100" alt="Image gallery of {{ $project->title }}"
                                    src="{{ Voyager::image($image) }}" data-aos="fade-right"
                                    data-aos-delay="{{ $counter }}" />
                            </div>
                            @php($counter = $counter + 10)
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('scripts')
    {{-- Test for another parallax --}}
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script>
        var image = document.getElementsByClassName('banner-image__img');
        new simpleParallax(image, {
            delay: .6,
	        transition: 'cubic-bezier(0,0,0,1)'
        });
    </script>
@endsection