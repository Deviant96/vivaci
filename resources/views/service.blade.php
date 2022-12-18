@extends('layouts.layout')

{{-- Image zooming component --}}
@php($imageZoom = true)

@section('content')
    <section>
        <div class="container top-margin">

            <div class="row py-5 mt-3">
                <div class="col-12 col-sm-6">
                    <h2 class="fw-bold">{{ $service->title }}</h2>
                </div>
                <div class="col-12 col-sm-6">
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
                <div class="col-12 p-0 banner-container">
                    {{-- style="background-image: url({{ Voyager::image($project->image) }});filter:brightness(0.4);"> --}}
                    <div class="banner-image">
                        <img src="{{ Voyager::image($service->image) }}" alt=""
                            class="w-100 banner-image__img" />
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container container-padding">

            <div class="row">
                <div class="col-12 p-0 p-sm-5">
                    <h3 class="text-center fw-bold">See us on action</h3>
                    <div class="row gy-3">
                        {{-- {{ $images = json_decode($service->gallery); }}
                    @foreach ($images as $image)
                    <div class="col-4" style="height: 240px">
                        <img class="h-100 w-100" src="{{Voyager::image($image)}}" />
                    </div>
                    @endforeach --}}
                        @foreach (json_decode($service->gallery) as $image)
                            <div class="col-6 col-sm-4 gallery-item">
                                <img class="h-100 w-100" src="{{ Voyager::image($image) }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('title', $service->title.' service - Vivaci Living')
@section('meta_keywords', 'service,vivaci,living,designers,interior,'.$service->title)
@section('meta_description', $service->description) 

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
