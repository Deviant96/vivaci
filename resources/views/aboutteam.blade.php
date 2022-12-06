@extends('layouts.layout')

@php($imageZoom = true)

@section('style')
<style>
    .about-member h3 {font-size: 1.2rem;}
    .member-img-container {
        max-height: 350px;
    }
    .member-img {
        width: 100%;
    }
    @media (min-width:1200px) {
        .member-img-container {
            max-height: 600px;
        }
    }
    @media (max-width:1200px) {
        .member-img-container {
            max-height: 490px;
        }
    }
    @media (max-width:992px) {
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
    }
</style>
@endsection

@section('content')
    <section>

        <div class="container-fluid">

            <div class="row">
                <div class="col-12 col-md-6 order-2 order-md-1 d-flex flex-column justify-content-center px-0 px-md-5 mt-5 mt-md-0">
                    <div class="ms-0 ms-md-5 px-4 px-md-0">
                        <h2 class="fw-bold font-big-one">Explore our <span class="text-lowercase">{{ $details->name }}</span> team at
                            {{ setting('site.title') }}</h2>
                        <div class="mt-3">{!! $details->description !!}</div>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2" style="padding:0">
                    <div class="text-end d-none d-md-block"
                        style="background: url({{ Voyager::image($details->image) }}) no-repeat center;background-size:cover;min-height: 100vh;">

                    </div>
                    <div class="img-container d-block d-md-none">
                        <img class="w-100" src="{{ Voyager::image($details->image) }}" alt="Photo of the team">
                    </div>

                </div>
            </div>

        </div>

    </section>

    <section>

        <div class="container py-5 about-member">

            <div class="row">
                <div class="col-12">
                    <div class="row g-5 d-flex justify-content-center">
                        @if (count($em) < 1)
                            <div class="vh-100 d-flex justify-content-center align-items-center">
                                <h2 class="font-big-two">No members yet in this team</h2>
                            </div>
                        @else
                            @foreach ($em as $e)
                                <div class="col-6 col-sm-4">
                                    <div class="img-container member-img-container img-shadow">
                                        <img class="member-img" src="{{ Voyager::image($e->photo) }}" />
                                    </div>
                                    <h3 class="mt-3">{{ $e->name }}</h3>
                                    <p class="mt-2 fst-italic">{{ $e->title }}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
