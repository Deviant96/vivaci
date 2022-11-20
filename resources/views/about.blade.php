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

        .about-history::after {
            content: " ";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background-color: #000;
            opacity: 0.8;
        }
    </style>
@endsection

@section('content')
    <section class="top-margin">
        <div class="container-fluid py-5 overflow-hidden p-0">
            <div class="row">
                <div class="col-6">
                    <div class="position-relative" style="height: 600px;filter: drop-shadow(1px 1px 15px 5px #000);filter: drop-shadow(0 0 25px rgba(0,0,0,0.3));">
                        <div><img src="https://source.unsplash.com/500x350/?interior" alt="" /></div>
                        <div class="position-absolute"
                            style="right: 0;
                                        bottom:0;
                                        transform:translateX(0);">
                            <img src="https://source.unsplash.com/500x350/?interior-design" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-6" style="margin-left:-100px;">
                    <div class="h-100"
                        style="position: relative;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;">
                        <div
                            style="position: absolute; 
                                    top:25%;
                                    left: 0;
                                    transform: translateY(-100%);">
                            <h2 class="fs-1">Every work of art tells a story</h2>
                        </div>
                        <div class="ra">
                            <p class="fs-5"
                                style="display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    text-align: center;">
                                We want to bring a thoughtful design to the space, not just aesthetically pleasing, but also
                                functional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative about-history"
        style="background-image:url(https://source.unsplash.com/1920x1080/?interior);">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-dark text-center d-flex flex-column justify-content-center align-items-center vh-100">
                        <div class="mx-auto w-50" style="z-index: 2;">
                            <h2 class="text-white fs-1">How it Start</h2>
                            <p class="mt-3 text-white-50">Vivaci Living is a Jakarta City based furniture retail, interior
                                design & build company specialized in Scandinavian, modern, mid century, and industrial
                                design. Established in 2015. Design is our passion. We are a team with talented designers
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
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="py-5">
                        <h2 class="text-center fs-1">Why choose us</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6">
                    <div class="d-flex flex-column justify-content-center align-items-end h-100">
                        <div class="w-75">
                            <h3>Extensive work experience</h3>
                            <p>Our trusted design team is composed of designers with a wide range of experience and
                                expertise.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="https://source.unsplash.com/400x400/?interior" width=400 height=400 alt=""
                            style="box-shadow: 0px 0px 25px 5px rgba(0,0,0,0.3)" />
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="https://source.unsplash.com/400x400/?interior" width=400 height=400 alt=""
                            style="box-shadow: 0px 0px 25px 5px rgba(0,0,0,0.3)" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column justify-content-center align-items-start h-100">
                        <div class="w-75">
                            <h3>Extensive work experience</h3>
                            <p>Our trusted design team is composed of designers with a wide range of experience and
                                expertise.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-6">
                    <div class="d-flex flex-column justify-content-center align-items-end h-100">
                        <div class="w-75">
                            <h3>Extensive work experience</h3>
                            <p>Our trusted design team is composed of designers with a wide range of experience and
                                expertise.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="https://source.unsplash.com/400x400/?interior" width=400 height=400 alt=""
                            style="box-shadow: 0px 0px 25px 5px rgba(0,0,0,0.3)" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div style="background-image: url(https://source.unsplash.com/1920x1080/?team);height:100vh;">
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h2 class="fs-1 fw-bold">Interior Design With Passion</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                </div>
                <div class="col-6">
                    <p>Our clients are very important and special to us, therefor our promise to you is providing the best
                        service by our talented team who have high experience in their field. </p>

                    <p>Our talented designers and craftsmen have collaborated to achieve high standard to make sure you as
                        our customers are fully satisfied with our services.</p>

                    <div class="mt-5 d-flex flex-wrap gap-5">
                        <a href="..." class="primary-link">View design team</a>
                        <a href="..." class="primary-link">View production team</a>
                    </div>
                </div>
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
