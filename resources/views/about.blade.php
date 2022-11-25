@extends('layouts.layout')

{{-- Image zooming component --}}
@php($imageZoom = true)

@section('content')
    <section>
        <div class="container top-margin">
            <div class="row">
                <div class="col-12">

                    <div style="width: 100%; height: 600px;">
                        <img style="max-height: 100%; width: 100%;object-fit: cover;"
                            src="{{ asset('/img/teams/allteam.jpg') }}" alt="Vivaci Living Teams" />
                    </div>

                    <div class="row d-flex justify-content-center py-5 mt-5">
                        <div class="col-6">
                            <h2 class="font-big-one">About Us</h2>
                        </div>
                        <div class="col-6">
                            <p class="font-para-one">We are a team with talented designers
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
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="img-container w-100">
                            <img src="{{ asset('/img/teams/founder.jpg') }}" alt="Founder">
                        </div>
                        <h3 class="text-center mt-3">Andrew Thomas Kading</h3>
                        <p class="text-center">Founder</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="img-container w-100">
                            <img src="{{ asset('/img/teams/cofounder.jpg') }}" alt="Founder">
                        </div>
                        <h3 class="text-center mt-3">Lia Yuliana</h3>
                        <p class="text-center">Co-Founder</p>
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
                        <div class="d-flex flex-column justify-content-center align-content-center">
                            <div class="img-container">
                                <img src="{{ Voyager::image($item->image) }}" alt="Design Team"
                                style="width:100%;min-height: 400px;max-height:400px;object-fit:cover;">
                            </div>
                            <h3 class="text-center mt-3">{{ $item->name }} Team</h3>
                            <p class="text-center">{!! $item->description !!}</p>
                            <div class="text-center"><a class="primary-link" href="{{ url()->current() . "/" . $item->slug }}">View members</a></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
