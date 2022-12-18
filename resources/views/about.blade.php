@extends('layouts.layout')

@section('title', 'About Vivaci Living')
@section('meta_keywords', 'about,vivaci,living,designers,interior')
@section('meta_description', 'We are a team with talented designers
and great craftsmanship. We want to bring a thoughtful design to the space, not just
aesthetically pleasing, but also functional.') 

{{-- Image zooming component --}}
@php($imageZoom = true)

@section('style')
    <style>
        .founder-img {
            object-fit: contain;
            max-height: 100%;
            width: 100%;
        }

        @media (max-width: 576px) {
            .founder-img {
                max-height: 300px;
            }

            .team-title {
                font-size: 1.2em;
            }
        }

        .team-img {
            /* width:100%;
                min-height: 400px;
                max-height:400px;
                object-fit:cover; */
        }
    </style>
@endsection

@section('content')
    <section>
        <div class="container top-margin">
            <div class="row">
                <div class="col-12">

                    <div class="w-100 h-auto">
                        <img style="max-height: 100%; width: 100%;object-fit: cover;"
                            src="{{ asset('/img/teams/allteam.jpg') }}" alt="Vivaci Living Teams" data-aos="fade-down" />
                    </div>

                    <div class="row d-flex justify-content-center py-3 py-sm-5 mt-0 ms-sm-5">
                        <div class="col-12 col-md-6">
                            <h2 class="font-big-one" data-aos="fade-right">About Us</h2>
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="font-para-one" data-aos="fade-left">We are a team with talented designers
                                and great craftsmanship. We want to bring a thoughtful design to the space, not just
                                aesthetically pleasing, but also functional. Client is our priority. We want to understand
                                the clients ideas, needs and budget, turning it into a foundation for the design that can
                                turn clients dream into reality. Quality is our commitment. Being a blessing to people
                                around us is our goal, that is why we prioritize our quality and service to ensure you get
                                the satisfaction you deserve.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container container-padding">
            <div class="row">
                <div class="col-6">
                    <div class="d-flex flex-column justify-content-center align-items-center" data-aos="fade-up">
                        <div class="img-container img-shadow w-100 text-center">
                            <img src="{{ asset('/img/teams/founder.jpg') }}" alt="Founder" class="founder-img">
                        </div>
                        <h3 class="text-center mt-3 team-title">Andrew Thomas Kading</h3>
                        <p class="fst-italic">Founder</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column justify-content-center align-items-center" data-aos="fade-down">
                        <div class="img-container img-shadow w-100 text-center">
                            <img src="{{ asset('/img/teams/cofounder.jpg') }}" alt="Founder" class="founder-img">
                        </div>
                        <h3 class="text-center mt-3 team-title">Lia Yuliana</h3>
                        <p class="fst-italic">Co-Founder</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container container-padding">
            <div class="row g-5">
                @foreach ($employee as $item)
                    <div class="col-6">
                        <div class="d-flex flex-column justify-content-center align-content-center" data-aos="fade-right">
                            <div class="img-container img-shadow">
                                <img src="{{ Voyager::image($item->image) }}" alt="Design Team"
                                    class="founder-img team-img">
                            </div>
                            <h3 class="text-center mt-3 team-title">{{ $item->name }} Team</h3>
                            <p class="text-center fst-italic">{!! $item->description !!}</p>
                            <div class="text-center"><a class="primary-link"
                                    href="{{ url()->current() . '/' . $item->slug }}">View members</a></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
