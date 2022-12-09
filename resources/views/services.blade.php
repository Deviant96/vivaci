@extends('layouts.layout')

@section('style')
    <style>
        .simpleParallax { height: 100%; }
        .banner-img-container {
            height: 550px;
            overflow: hidden;
            position: relative;
        }

        @media (max-width:576px) {
            .banner-img-container {
                height: 350px;
                background-position: bottom;
            }
        }

        .banner-img {
            height: 100%;
            position: absolute;
            width: 100%;
            z-index: -1;
        }

        .banner-img__img {
            height: 100%;
            width:  100%;
            object-fit: cover;
        }

        .number {
            font-weight: bold;
            font-size: 4rem;
        }

        /* .back-squares-base {
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
        } */

        @media (min-width: 576px) {
            .form-content-container {
                background-color: #F5F5F5;
                border-radius: 15px;
                border: 1px solid rgba(0, 0, 0, 0.1);
                box-shadow: 0px 15px 25px 0px rgba(0, 0, 0, 0.1);
            }

            /* .form-content {
                width: 75%;
            } */
        }

        .form-control::placeholder {
            color: rgba(0, 0, 0, 0.3);
        }

        .form-control {
            border: none;
            background: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.3);
            transition: border-color .4s ease-out;
            border-radius: 0;
        }

        .form-control:active,
        .form-control:focus,
        .btn.focus,
        .btn:focus {
            outline: none;
            box-shadow: none;
            border-color: black;
        }

        .form-control:focus {
            background-color: transparent;
        }

        .form-control.valid {
            border-color: green;
        }

        .form-control.invalid {
            border-color: red;
        }

        .form-control+small {
            color: red;
            opacity: 0;
            height: 0;
            transition: opacity .4s ease-out;
        }

        .form-control.invalid+small {
            opacity: 1;
            height: auto;
            margin-bottom: 20px;
            transition: opacity .4s ease-out;
        }

        @media (max-width:576px) {
            .form-img {
                width: 100%;
                max-height: 200px;
                object-fit: cover;
            }
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
                        <img src="{{ url('storage/' . setting('banner.services_banner')) }}" alt=""
                            class="banner-img__img"
                            style="filter:brightness(0.7);" />
                    </div>

                    <div class="container h-100">
                        <div class="h-100 d-flex flex-column justify-content-center align-items-center text-light"
                        data-aos="fade-down">
                        <div class="text-start text-sm-center pt-5 mt-5">
                            <h2 class="fw-bold font-big-one" data-aos="fade-right" data-aos-delay="200">Amazing Services by
                                Us</h2>
                            <p class="text-white-50" data-aos="fade-right" data-aos-delay="500">Explore the possibilities
                            </p>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </section>

    {{-- <section>
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
    </section>    --}}

    <section>
        <div class="container container-padding">
            <div class="row">
                <div class="col">
                    <div class="text-sm-center mt-3">
                        <h2 data-aos="fade-right">What We Provide</h2>
                        <p data-aos="fade-left">Vivaci Living is full services Interior Design firm, providing a high
                            quality product and services
                            for commercial ans residential interiors. We work as a super team to deliver our best services
                            before, during and after construction.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @foreach ($em as $service)
                    <div class="col-12 col-sm-4" data-aos="fade-right">
                        <img src="{{ Voyager::image($service->icon) }}" width="50" height="50" />
                        <h3 class="mt-3 mt-sm-5">{{ $service->title }}</h3>
                        <p>{{ $service->brief_description }}</p>
                        <a href="{{ url()->current() . '/' . $service->slug }}" class="primary-link mt-3">Learn more</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="img-container w-100">
                        <img src="{{ asset('img/services-form-img.jpg') }}" alt=""
                            class="form-img" />

                    </div>
                </div>
                <div class="col-12 col-sm-8 mt-5 mt-sm-0">
                    <div class="d-flex flex-column justify-content-center h-100">
                        <h2 class="fs-1">Let's get started</h2>
                        <div class="mt-4">
                            <form id="wa-form" name="wa-form">

                                <div class="form-content">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Enter your name" aria-label="Name">
                                                <small id="usernameHelp" class="form-text">Username must be between 5 - 12
                                                    characters.</small>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="email"
                                                    placeholder="Enter your email" aria-label="Email">
                                                <small id="emailHelp" class="form-text">Enter valid email address.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mt-sm-5">
                                        <div class="col">
                                            <div class="form-group">
                                                <textarea class="form-control" id="message" placeholder="Enter your message" aria-label="Message"></textarea>
                                                <small id="messageHelp" class="form-text">Enter valid message</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mt-sm-5">
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
        </div>
    </section>
@endsection

@section('scripts')
    {{-- Whatsapp form --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $("form#wa-form").submit(function(e) {
            e.preventDefault();
            var name = $("#name").val();
            var email = $("#email").val();
            var message = $("#message").val();

            var win = window.open(
                `https://web.whatsapp.com/send?text=Hi%20Vivaci%20Living,%0AI%20am%20interested%20in%20your%20service.%20Would%20you%20please%20to%20share%20the%20pricelist?%0A%0AName%20%3A%20*${name}*%0AEmail%20%3A%20*${email}*%0AMessage%20%3A%20*${message}*%0A%0AThank%20you!&phone=6281283746994`,
                '_blank');

            return false;
        });
    </script>

    {{-- Test for another parallax --}}
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script>
        var image = document.getElementsByClassName('banner-img__img');
        new simpleParallax(image, {
            delay: .6,
	        transition: 'cubic-bezier(0,0,0,1)'
        });
    </script>

    <script>
        var image_form = document.getElementsByClassName('form-img');
        new simpleParallax(image_form, {
            orientation: 'right',
            delay: .6,
        });
    </script>
@endsection
