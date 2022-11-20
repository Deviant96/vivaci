@extends('layouts.layout')

@section('extra-css')
    <style>
        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(1, 1);
            }

            to {
                -webkit-transform: scale(1.5, 1.5);
            }
        }

        @keyframes zoom {
            from {
                transform: scale(1, 1);
            }

            to {
                transform: scale(1.5, 1.5);
            }
        }

        .carousel-item {
            height: 600px;
        }

        .min-hw-100 {
            min-width: 100%;
            min-height: 100%;
        }

        .carousel-inner .carousel-item>img {
            -webkit-animation: zoom 20s;
            animation: zoom 20s;
        }

        .home-about {
            background: rgb(196, 196, 196);
            background: -moz-linear-gradient(240deg, rgba(196, 196, 196, 1) 25%, rgba(255, 255, 255, 1) 100%);
            background: -webkit-linear-gradient(240deg, rgba(196, 196, 196, 1) 25%, rgba(255, 255, 255, 1) 100%);
            background: linear-gradient(240deg, rgba(196, 196, 196, 1) 25%, rgba(255, 255, 255, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#c4c4c4", endColorstr="#ffffff", GradientType=1);
        }
    </style>
@endsection

@section('content')
    {{-- Top Carousel --}}
    <section>

        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <!-- Wrapper for slides -->

            <div class="carousel-inner">

                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1400"
                        class="d-block min-hw-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="https://images.unsplash.com/photo-1445280471656-618bf9abcfe0?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1400"
                        class="d-block min-hw-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="https://images.unsplash.com/photo-1445280471656-618bf9abcfe0?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1400"
                        class="d-block min-hw-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>

            </div>



            <!-- Left and right controls -->

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </section>

    {{-- About --}}
    <section class="home-about">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <div class="text-center d-flex flex-column align-items-center py-3">
                        <h2>About Us</h2>
                        <p class="w-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores eius esse
                            possimus. </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gap-5">
                <div class="col-6 d-flex justify-content-end position-relative" style="height: 500px;width: 500px;">
                    <div class="home-about-image-top" style="position: absolute;bottom: 0;right: 0;z-index: 41;">
                        <img class="rounded-4"
                            src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=300"
                            width="300" height="300" alt="" />
                    </div>
                    <div class="home-about-image-below" style="position: absolute;top: 0;left: 0;z-index: 40;">
                        <img class="rounded-4"
                            src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=300"
                            width="300" height="300" alt="" />
                    </div>
                </div>
                <div class="col-6 d-flex">
                    <div class="pe-5 d-flex justify-content-center flex-column">
                        <h3 class="display-5 fw-bold">Brighten Up Your Living</h3>
                        <p class="fs-5 text-black-50">Innovate Your Home</p>
                        <p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt corrupti molestiae porro velit
                            ad accusantium aspernatur quos ex minima voluptatem harum, unde quis itaque ipsa, ipsam eveniet,
                            accusamus inventore veritatis!</p>
                        <a href="..." class="primary-link">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

     {{-- Projects --}}
     <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-uppercase fs-6 fw-bold text-black-50">Projects</h2>
                    <div class="fs-4 fw-bold">Awesome things we’ve done</div>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-end">
                    <a href="..." class="link-primary">View all projects</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">

                    <div class="row g-4">
                        <div class="col-4">
                            <div class="card h-100">
                                <img src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=200&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=250"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-text"><small class="text-muted">Alam Sutera, Tangerang</small></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text text-end"><small class="text-muted">March 2022</small>
                                            </p>
                                        </div>
                                    </div>
                                    <h3 class="mt-4 text-uppercase">Bright scandinavian House</h3>
                                    <p class="mb-5 text-black-50">A scandinavian interior design with bright color for Mr. Adriya house at Alam Sutera.</p>
                                    <a href="#" class="link-primary stretched-link">View project</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card h-100">
                                <img src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=200&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=250"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-text"><small class="text-muted">Alam Sutera, Tangerang</small></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text text-end"><small class="text-muted">March 2022</small>
                                            </p>
                                        </div>
                                    </div>
                                    <h3 class="mt-4 text-uppercase">Bright scandinavian House</h3>
                                    <p class="mb-5 text-black-50">A scandinavian interior design with bright color for Mr. Adriya house at Alam Sutera.</p>
                                    <a href="#" class="link-primary stretched-link">View project</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card h-100">
                                <img src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=200&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=250"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-text"><small class="text-muted">Alam Sutera, Tangerang</small></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text text-end"><small class="text-muted">March 2022</small>
                                            </p>
                                        </div>
                                    </div>
                                    <h3 class="mt-4 text-uppercase">Bright scandinavian House</h3>
                                    <p class="mb-5 text-black-50">A scandinavian interior design with bright color for Mr. Adriya house at Alam Sutera.</p>
                                    <a href="#" class="link-primary stretched-link">View project</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section style="background-color:#E8E8E8">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h2 class="text-uppercase fs-6 fw-bold text-black-50">How We Work</h2>
                    <div class="px-5 mt-3">
                        <div class="border-bottom">
                            <span class="fs-2">Concept Creation - Layouting - Budgeting</span>
                        </div>
                        <div class="border-bottom mt-3">
                            <span class="fs-2">Design Development</span>
                        </div>
                        <div class="border-bottom mt-3">
                            <span class="fs-2">Construction</span>
                        </div>
                    </div>
                    <p class="my-5"><strong class="fw-bold">Vivaci Living</strong> is full services Interior Design firm, providing a high quality product and services for commercial ans residential interiors. We work as a super team to deliver our best services before, during and after construction.</p>
                    <a href="..." class=" btn btn-primary">Our Services</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Products --}}
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-uppercase fs-6 fw-bold text-black-50">Products</h2>
                    <div class="fs-4 fw-bold">Products for your home</div>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-end">
                    <a href="..." class="link-primary">View all products</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">

                    <div class="row g-4">
                        <div class="col-3">
                            <div class="card h-100">
                                <img src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=200&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=250"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" class="link-primary stretched-link">View product</a>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <p class="card-text"><small class="text-muted">Product Name</small></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text text-end"><small class="text-muted">Product Type</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card h-100">
                                <img src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=200&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=250"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" class="link-primary stretched-link">View product</a>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <p class="card-text"><small class="text-muted">Product Name</small></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text text-end"><small class="text-muted">Product Type</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card h-100">
                                <img src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=200&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=250"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" class="link-primary stretched-link">View product</a>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <p class="card-text"><small class="text-muted">Product Name</small></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text text-end"><small class="text-muted">Product Type</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card h-100">
                                <img src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=200&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=250"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" class="link-primary stretched-link">View product</a>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <p class="card-text"><small class="text-muted">Product Name</small></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text text-end"><small class="text-muted">Product Type</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Our Team --}}
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-6">
                    <img src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=500"
                        alt="" />
                </div>
                <div class="col-6 d-flex flex-column justify-content-center">
                    <div>
                        <h2>Our Team</h2>
                        <p>Trusted Design Team</p>
                        <p>Our hands-on approach to design ensures that our team utilizes their skills and creative vision
                            to produce memorable, unique, and timeless designs for our clients.</p>
                        <a href="..." class="btn btn-secondary">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section style="background-color:#E8E8E8">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="py-5 text-center d-flex flex-column gap-3 justify-content-center align-items-center">
                        <div class="w-50">
                            <h2>Have an idea in your mind?
                                Let’s discuss with us!</h2>
                            <p>The Vivaci Living Design Team continues to work closely with our clients to create
                                one-of-a-kind design solutions tailored specifically to each client.</p>
                            <a href="..." class="btn btn-primary">Connect With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
