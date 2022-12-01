@extends('layouts.layout')

@section('style')
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

        /* .carousel-item {
                height: 600px;
            } */

        .min-hw-100 {
            min-width: 100%;
            min-height: 100%;
        }

        .carousel-inner .carousel-item>img {
            -webkit-animation: zoom 20s;
            animation: zoom 20s;
        }

        /* section {
            background: rgb(196, 196, 196);
            background: -moz-linear-gradient(240deg, rgba(196, 196, 196, 1) 25%, rgba(255, 255, 255, 1) 100%);
            background: -webkit-linear-gradient(240deg, rgba(196, 196, 196, 1) 25%, rgba(255, 255, 255, 1) 100%);
            background: linear-gradient(240deg, rgba(196, 196, 196, 1) 25%, rgba(255, 255, 255, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#c4c4c4", endColorstr="#ffffff", GradientType=1);
        } */

        section {
            background: #ebebeb;
        }

        .card-img,
        .card-img-top {
            width: 100%;
            max-height: 250px;
            min-height: 250px;
            object-fit: cover;
        }

        .card:hover img {
            transform: scale(1.15);
        }

        .link-primary {
            color: var(--primary-color);
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
                    <img src="https://source.unsplash.com/1920x1080/?interior" class="d-block min-hw-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>The Art of Designing Your Home</h5>
                        <p>The most beautiful homes are built with love.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="https://source.unsplash.com/1920x1080/?3d" class="d-block min-hw-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Making Your Space Shine</h5>
                        <p>We're here to help you create the home of your dreams.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="https://source.unsplash.com/1920x1080/?interior+design" class="d-block min-hw-100"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>The Best Interior Design Service in Indonesia</h5>
                        <p>Designing your home is our passion.</p>
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
                        <p class="w-50">Whether you're looking for a modern update or something more traditional, we've
                            got the expertise and creative vision to help bring your vision to life.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gap-5">
                <div class="col-6 d-flex justify-content-end position-relative" style="height: 500px;width: 500px;">
                    <div class="home-about-image-top img-container rounded-4"
                        style="position: absolute;bottom: 0;right: 0;z-index: 41;">
                        <img src="{{ asset('/img/home-about-1.jpg') }}" width="300" height="300" alt="" />
                    </div>
                    <div class="home-about-image-below img-container rounded-4"
                        style="position: absolute;top: 0;left: 0;z-index: 40;">
                        <img src="{{ asset('/img/home-about-2.jpg') }}" width="300" height="300" alt="" />
                    </div>
                </div>
                <div class="col-6 d-flex">
                    <div class=" d-flex justify-content-center flex-column">
                        <div class="pe-5">
                            <h3 class="display-5 fw-bold">Brighten Up Your Living</h3>
                            <p class="fs-5 text-black-50">Innovate Your Home</p>
                            <p class="mb-5">Our team of interior designers is here to help you make your dream home a
                                reality. Whether you're looking to make over an existing space or build from scratch, we can
                                take care of every step of the process—allowing you to focus on what matters most: living
                                well in your space.</p>
                            <a href="{{ route('about') }}" class="primary-link">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Projects --}}
    <section>
        {{-- <div class="container py-5">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-uppercase fs-6 fw-bold text-black-50">Projects</h2>
                    <div class="fs-4 fw-bold">Awesome things we’ve done</div>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-end">
                    @foreach ($categories as $item)
                        <a href="{{ url(route('projects', ['slug' => $item->slug])) }}"
                            class="primary-link ms-4 d-inline-block">{{ $item->title }}</a>
                    @endforeach
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">

                    <div class="row g-4">
                        @foreach ($projects as $item)
                            @php($project_url = '/projects/' . $item->category->slug . '/' . $item->slug)
                            <div class="col-4">
                                <div class="card h-100">
                                    <div class="img-container">
                                        <img src="{{ Voyager::image($item->image) }}" class="card-img-top" alt="...">
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="card-text"><small
                                                        class="text-muted">{{ $item->location }}</small></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="card-text text-end"><small
                                                        class="text-muted">{{ $item->date }}</small>
                                                </p>
                                            </div>
                                        </div>
                                        <h3 class="mt-4 text-uppercase">{{ $item->title }}</h3>
                                        <p class="mb-5 text-black-50">{{ $item->description }}</p>
                                        <a href="{!! $project_url !!}" class="stretched-link">View project</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="container container-padding">
            <div>
                <div class="row">
                    <div class="col-6">
                        <h2 class="text-uppercase fs-6 fw-bold text-black-50">Projects</h2>
                        <h3 class="fw-bold font-big-one">Awesome things we’ve done</h3>
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-end">
                        @foreach ($categories as $item)
                            <a href="{{ url(route('projects', ['slug' => $item->slug])) }}"
                                class="primary-link ms-4 d-inline-block">{{ $item->title }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="row mt-5">
                    @for ($i = 0; $i < count($projects); $i++)
                        @php($item = $projects[$i])
                        @php($project_url = '/projects/' . $item->category->slug . '/' . $item->slug)
                        {{-- {{ $projects[$i] }} --}}
                        
                        @if ($i == 0)
                            <div class="col-6">
                                <div class="viva-card">
                                    <div class="viva-card__image" style="background-image:url({{ Voyager::image( $item->image ) }});height:840px;"></div>  
                                    <div class="viva-card__text">
                                        <i class="bi bi-link-45deg" style="font-size: 2rem;"></i>
                                        <h3>{{ $item->title }}Tes</h3>
                                    </div> 
                                    <a href="{{ $project_url }}" class="viva-card__link"></a>
                                </div>
                            </div>
                        @endif
                        @if ($i == 1)
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="viva-card">
                                            <div class="viva-card__image" style="background-image:url({{ Voyager::image( $item->image ) }});height:400px;"></div>  
                                            <div class="viva-card__text">
                                                <i class="bi bi-link-45deg" style="font-size: 2rem;"></i>
                                                <h3>{{ $item->title }}</h3>
                                            </div> 
                                            <a href="{{ $project_url }}" class="viva-card__link"></a>
                                        </div>
                                    </div>
                        @endif
                        @if ($i == 2)
                                    <div class="col-12" style="margin-top: 40px">
                                        <div class="viva-card">
                                            <div class="viva-card__image" style="background-image:url({{ Voyager::image( $item->image ) }});height:400px;"></div>  
                                            <div class="viva-card__text">
                                                <i class="bi bi-link-45deg" style="font-size: 2rem;"></i>
                                                <h3>{{ $item->title }}</h3>
                                            </div> 
                                            <a href="{{ $project_url }}" class="viva-card__link"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endfor
                    
                    
                            
                    
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section style="background-color:#E8E8E8">
        <div class="container container-padding">
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
                    <p class="my-5"><strong class="fw-bold">Vivaci Living</strong> is full services Interior Design
                        firm, providing a high quality product and services for commercial ans residential interiors. We
                        work as a super team to deliver our best services before, during and after construction.</p>
                    <a href="{{ route('services') }}" class=" btn btn-primary">Our Services</a>
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
                        @for ($i = 0; $i < 4; $i++)
                            <div class="col-3">
                                <div class="card h-100">
                                    <div class="img-container">
                                        <img src="https://source.unsplash.com/400x400/?product+{{ $i }}"
                                            class="card-img-top min-hw-100" alt="Product #{{ $i + 1 }}">
                                    </div>
                                    <div class="card-body">
                                        <a href="#" class="stretched-link">View product</a>
                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <p class="card-text"><small class="text-muted">Product
                                                        #{{ $i + 1 }}</small></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="card-text text-end"><small class="text-muted">Product
                                                        Type</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Our Team --}}
    <section class="overflow-hidden">
        <div class="container container-padding">
            <div class="row">
                <div class="col-6 d-flex flex-column justify-content-center">
                    <div>
                        <h2 class="text-uppercase fs-6 fw-bold text-black-50">Our Team</h2>
                        <p class="font-big-two fw-bold">Trusted Design Team</p>
                        <p class="mb-5">Our hands-on approach to design ensures that our team utilizes their skills and
                            creative vision
                            to produce memorable, unique, and timeless designs for our clients.</p>
                        <div class="row gy-4">
                            @foreach ($teams as $item)
                                <div class="col-6">
                                    <a href="{{$item->slug}}" class="primary-link">{{$item->name}} team</a>
                                </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
                <div class="col-6">
                    <div class="position-relative" style="height: 600px">
                        <img src="{{ url('img/team.bmp') }}" alt="" class="position-absolute"
                            style="max-width: 1000px; top:50%;transform:translateY(-50%)" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Instagram --}}
    <section style="background-color: #000000">
        <div class="container container-padding">
            <div class="row">
                <div class="col">
                    <h2>Find us on Instagram <a href="{{ url('https://www.instagram.com/vivaciliving/') }}" target="_blank">@vivaciliving</a></h2>
                    <!-- Place <div> tag where you want the feed to appear -->
                        <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank"
                            class="crt-logo crt-tag">Powered by Curator.io</a></div>
                    <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
                    <script type="text/javascript">
                        /* curator-feed-default-feed-layout */
                        (function() {
                            var i, e, d = document,
                                s = "script";
                            i = d.createElement("script");
                            i.async = 1;
                            i.charset = "UTF-8";
                            i.src = "https://cdn.curator.io/published/0a4b0477-9c10-41a9-be6a-bb34d5911b12.js";
                            e = d.getElementsByTagName(s)[0];
                            e.parentNode.insertBefore(i, e);
                        })();
                    </script>
                </div>
            </div>
        </div>
        
    </section>

    {{-- CTA --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div style="background-color:#E8E8E8">
                        <div class="py-5 text-center d-flex flex-column gap-3 justify-content-center align-items-center">
                            <div class="w-50 py-5">
                                <h2>Have an idea in your mind?
                                    Let’s discuss with us!</h2>
                                <p class="mt-2">The Vivaci Living Design Team continues to work closely with our clients
                                    to create
                                    one-of-a-kind design solutions tailored specifically to each client.</p>
                                <a href="{{ route('contact') }}" class="btn btn-primary mt-4">Connect With Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
