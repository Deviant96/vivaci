@extends('layouts.layout')

@section('style')
    <style>
        /* We make it white color because banner has dark background */
        .navbar:not(.nav-active) .navbar-nav>.nav-item>.nav-link {
            color: #ffffff;
        }

        @media (min-width: 576px) {
            .form-content-container {
                background-color: #F5F5F5;
                border-radius: 15px;
                border: 1px solid rgba(0, 0, 0, 0.1);
                box-shadow: 0px 15px 25px 0px rgba(0, 0, 0, 0.1);
            }

            .form-content {
                width: 75%;
            }
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

        .card {
            transition: box-shadow .3s ease;
        }

        .card:hover {
            box-shadow: 0px 15px 15px 0px rgba(0, 0, 0, 0.1);
        }

        .gmaps,
        .gmaps>iframe {
            width: 100%;
            height: 500px;
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
                        <img src="{{ url('storage/' . setting('banner.contact_us_banner')) }}" alt=""
                            class="banner-image__img" data-rellax-speed="-3"
                            style="filter:brightness(0.7);" />
                    </div>
                    
                    <div class="container h-100 d-flex flex-column justify-content-center align-sm-items-center text-light"
                        data-aos="fade-down">
                        <div class="text-start text-sm-center pt-5 mt-5">
                            <h2 class="fw-bold font-big-one" data-aos="fade-right" data-aos-delay="200">Contact Us</h2>
                            <p class="text-white" data-aos="fade-right" data-aos-delay="500">Want to talk to us about
                                your plans?<br>Tell us!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container container-padding">
            <div class="row form">
                <div class="col-12 col-sm-8 mx-auto position-relative h-100 d-flex flex-column d-sm-block"
                    data-aos="fade-up" data-aos-delay="300">

                    <h3 class="text-gray-500 text-uppercase mb-0 mb-sm-4">Leave us a comment</h3>

                    <div class="p-0 p-sm-5 order-2 order-sm-1 mt-5 mt-sm-0 form-content-container">

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
    </section>

    <section>
        <div class="container container-padding">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-light h-100 text-center">
                        <div class="card-body text-gray-500">
                            <i class="bi bi-telephone-fill font-big-two text-gray-400"></i>
                            <h5 class="card-title text-gray-500 mt-4">Call Us</h5>
                            <p class="card-text text-gray-400">021-30448540</p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-down" data-aos-delay="300">
                    <div class="card border-light h-100 text-center">
                        <div class="card-body">
                            <i class="bi bi-envelope-at-fill font-big-two text-gray-400"></i>
                            <h5 class="card-title text-gray-500 mt-4">Our Email</h5>
                            <p class="card-text text-gray-400">Askvivaciliving@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-light h-100 text-center">
                        <div class="card-body">
                            <i class="bi bi-pin-map-fill font-big-two text-gray-400"></i>
                            <h5 class="card-title text-gray-500 mt-4">Our Address</h5>
                            <p class="card-text text-gray-400">Alam Sutera, South Tangerang</p>
                            {{-- <div>09:00 - 17:00<br>Monday - Friday</div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid m-0 p-0">
            <div class="gmaps" data-aos="fade-up" data-aos-delay="300">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2468778537755!2d106.65862181485939!3d-6.2311498627575315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbdea068c6ff%3A0x458e3e087e0ed716!2sVivaci%20Living!5e0!3m2!1sen!2sid!4v1670428353910!5m2!1sen!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
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

    {{-- Parallax --}}
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script>
        var image = document.getElementsByClassName('banner-image__img');
        new simpleParallax(image, {
            delay: .6,
            transition: 'cubic-bezier(0,0,0,1)'
        });
    </script>
@endsection
