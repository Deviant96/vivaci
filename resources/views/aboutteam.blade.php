@extends('layouts.layout')

@php($imageZoom = true)

@section('content')
    <section>

        <div class="container-fluid">

            <div class="row">
                <div class="col-6 d-flex flex-column justify-content-center px-5">
                    <div class="ms-5">
                        <h2 class="fw-bold font-big-one">Explore our <span class="text-lowercase">{{ $details->name }}</span> team at
                            {{ setting('site.title') }}</h2>
                        <div class="mt-3">{!! $details->description !!}</div>
                    </div>
                </div>
                <div class="col-6" style="padding:0">
                    <div class="text-end"
                        style="background: url({{ Voyager::image($details->image) }}) no-repeat center;background-size:cover;min-height: 100vh;">

                    </div>
                </div>
            </div>

        </div>

    </section>

    <section>

        <div class="container py-5">

            <div class="row">
                <div class="col-12">
                    <div class="row g-5">
                        @if (count($em) < 1)
                            <div class="vh-100 d-flex justify-content-center align-items-center">
                                <h2 class="font-big-two">No members yet in this team</h2>
                            </div>
                        @else
                            @foreach ($em as $e)
                                <div class="col-4">
                                    <div class="img-container" style="max-height: 600px;">
                                        <img class="h-100 w-100" src="{{ Voyager::image($e->photo) }}" />
                                    </div>
                                    <h3 class="mt-3">{{ $e->name }}</h3>
                                    <p class="mt-2">{{ $e->title }}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
