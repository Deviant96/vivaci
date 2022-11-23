@extends('layouts.layout')

@section('style')
    <style>
        .number {
            font-weight: bold;
            font-size: 4rem;
        }

        .back-squares-base {
            border: 1px solid #00000075;
            padding: 1rem;
            position: relative;
        }
        .back-squares-one {
            border: 1px solid #00000050;
            padding: 1rem;
            position: relative;
        }
        .back-squares-two {
            border: 1px solid #00000025;
            padding: 1rem;
            position: relative;
        }
    </style>
@endsection

@section('content')
    <section>
        <div class="container py-5 top-margin">
            <div class="row">
                <div class="col">
                    <h2 class="fs-1 fw-bold">What we provide</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                </div>
                <div class="col-6">
                    <p>Vivaci Living is full services Interior Design firm, providing a high quality product and services for commercial ans residential interiors. We work as a super team to deliver our best services before, during and after construction.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-6">
                    <div class="d-flex flex-row justify-content-end align-items-center h-100">
                        <div class="number">#1</div>
                        <h3 class="fs-2 p-0 ml-4">Concept Creation, Layouting, Budgeting</h3>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="back-squares-two">
                            <div class="back-squares-one">
                                <div class="back-squares-base">
                                    <img src="https://source.unsplash.com/400x400/?interior" width=400 height=400 alt=""
                                    style="box-shadow: 0px 0px 25px 5px rgba(0,0,0,0.3)" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="back-squares-two">
                            <div class="back-squares-one">
                                <div class="back-squares-base">
                                    <img src="https://source.unsplash.com/400x400/?interior" width=400 height=400 alt=""
                            style="box-shadow: 0px 0px 25px 5px rgba(0,0,0,0.3)" /> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-row justify-content-end align-items-center h-100">
                        <div class="number">#1</div>
                        <h3 class="fs-2 p-0 ml-4">Concept Creation, Layouting, Budgeting</h3>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-6">
                    <div class="d-flex flex-row justify-content-end align-items-center h-100">
                        <div class="number">#1</div>
                        <h3 class="fs-2 p-0 ml-4">Concept Creation, Layouting, Budgeting</h3>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="back-squares-two">
                            <div class="back-squares-one">
                                <div class="back-squares-base">
                                    <img src="https://source.unsplash.com/400x400/?interior" width=400 height=400 alt=""
                            style="box-shadow: 0px 0px 25px 5px rgba(0,0,0,0.3)" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h2>Our Other Services</h2>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($em as $service)
                    <div class="col-4">
                        <img src="{{Voyager::image($service->icon)}}" width="50" height="50" />
                        <h3 class="mt-5">{{ $service->title }}</h3>
                        <p>{{ $service->brief_description }}</p>
                        <a href="{{ url()->current() . "/" . $service->slug }}" class="primary-link mt-3">Learn more</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-4">
                    <img src="https://source.unsplash.com/400x600/?interior" alt="" />
                </div>
                <div class="col-8">
                    <div class="d-flex flex-column justify-content-center h-100">
                        <h2 class="fs-1">Let's get started</h2>
                        <form class="mt-5">

                            <div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username"
                                                placeholder="Enter your username" aria-label="Username">
                                            <small id="usernameHelp" class="form-text">Username must be between 5 - 12
                                                characters.</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email"
                                                placeholder="Enter your email" aria-label="Email">
                                            <small id="emailHelp" class="form-text">Enter valid email address.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="form-group">
                                            <textarea class="form-control" id="message" placeholder="Enter your message" aria-label="Message"></textarea>
                                            <small id="messageHelp" class="form-text">Enter valid message</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <button class="btn btn-primary d-block">Enquiry</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
