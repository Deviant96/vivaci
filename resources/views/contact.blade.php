@extends('layouts.layout')

@section('style')
    <style>
        /* @media (min-width: 576px) {
                .title {
                    margin-top:200px;
                }
            } */


        @media (min-width: 576px) {
            .form-content-container {
                background-color: #E8E8E8;
                border-radius: 15px;
                box-shadow: 0px 0px 45px 5px rgba(0, 0, 0, 0.3);
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

        @media (min-width: 576px) {
            .address {
                top: 50%;
                right: 0;
                transform: translate(25%, -50%);
                background-color: rgba(255, 255, 255, 0.4);
                border-radius: 15px;
                position: absolute;
            }
        }
    </style>
@endsection

@section('content')
    <section>
        <div class="container container-padding top-margin">
            <div class="row title">
                <div class="col">
                    <div class="text-start text-sm-center">
                        <h2 class="fw-bold font-big-one">Contact Us</h2>
                        <p>Want to talk to us about your plans?<br>Tell us!</p>
                    </div>
                </div>
            </div>
            <div class="row form">
                <div class="col-12 col-sm-8 mx-auto position-relative h-100 d-flex flex-column d-sm-block mt-5">

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

                    <div class="p-0 p-sm-3 address order-1 order-sm-2 mt-3 mt-sm-0">
                        <div class="fw-bold">

                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex flex-wrap gap-3">
                                    <i class="bi bi-pin-map-fill text-black-50"></i>
                                    <div>Alam Sutera, South Tangerang</div>
                                </div>
                                <div class="d-flex flex-wrap gap-3">
                                    <i class="bi bi-telephone-fill text-black-50"></i>
                                    <div>021-30448540</div>
                                </div>
                                <div class="d-flex flex-wrap gap-3">
                                    <i class="bi bi-envelope-at-fill text-black-50"></i>
                                    <div>Askvivaciliving@gmail.com</div>
                                </div>
                                <div class="d-flex flex-wrap gap-3">
                                    <i class="bi bi-clock-fill text-black-50"></i>
                                    <div>09:00 - 17:00<br>Monday - Friday</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
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
@endsection
