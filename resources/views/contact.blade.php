@extends('layouts.layout')

@section('style')
    <style>
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
    </style>
@endsection

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row" style="padding-top: 200px;">
                <div class="col">
                    <div class="text-center">
                        <h2 class="fw-bold" style="font-size:5rem;">Contact Us</h2>
                        <p>Want to talk to us about your plans?<br>Tell us!</p>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 100px 0;">
                <div class="col-8 mx-auto position-relative h-100">
                    <div class="p-5"
                        style="background-color:#E8E8E8;border-radius:15px;box-shadow: 0px 0px 45px 5px rgba(0, 0, 0, 0.3);">

                        <form>

                            <div class="w-75">
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
                    <div class="position-absolute p-3"
                        style="top: 50%;right:0;transform:translate(25%,-50%);background-color:#ffffff;border-radius:15px">
                        <div class="text-start">
                            <div class="fw-bold">Alam Sutera, South Tangerang</div>
                            <div class="fw-bold mt-2">021-30448540</div>
                            <div class="fw-bold mt-2">Askvivaciliving@gmail.com</div>
                            <div class="fw-bold mt-2">09:00 - 17:00<br>Monday - Friday</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
