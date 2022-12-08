@extends('layouts.layout')

{{-- Image zooming component --}}
@php($imageZoom = true)

@section('style')
    <style>
        .banner-img-container {
            height: 350px;
            overflow: hidden;
            position: relative;
        }

        @media (max-width:576px) {
            .banner-img-container {
                height: 300px;
                background-position: bottom;
            }
        }

        .banner-img {
            height: 100%;
            position: absolute;
            width: 100%;
            z-index: -1;
        }

        .banner-img>img {
            min-height: 100%;
            max-height: 100%;
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
    <section>
        <div class="container top-margin">

            <div class="row py-5 mt-3">
                <div class="col-6">
                    <h2 class="fw-bold">{{ $service->title }}</h2>
                </div>
                <div class="col-6">
                    <div>
                        <div>
                            <p class="text-muted">{{ $service->description }}</p>
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
                    {{-- style="background-image: url({{ Voyager::image($project->image) }});filter:brightness(0.4);"> --}}
                    <div class="banner-img">
                        <img src="{{ Voyager::image($service->image) }}" alt=""
                            class="w-100 banner-img__img" />
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container">

            <div class="row">
                <div class="col-12 p-5">
                    <h3 class="text-center fw-bold">See us on action</h3>
                    <div class="row gy-3">
                        {{-- {{ $images = json_decode($service->gallery); }}
                    @foreach ($images as $image)
                    <div class="col-4" style="height: 240px">
                        <img class="h-100 w-100" src="{{Voyager::image($image)}}" />
                    </div>
                    @endforeach --}}
                        @foreach (json_decode($service->gallery) as $image)
                            <div class="col-4" style="height: 240px">
                                <img class="h-100 w-100" src="{{ Voyager::image($image) }}" />
                            </div>
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
        var image = document.getElementsByClassName('banner-img__img');
        new simpleParallax(image, {
            delay: .6,
            transition: 'cubic-bezier(0,0,0,1)'
        });
    </script>
@endsection
