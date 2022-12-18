@extends('layouts.layout')

@section('title', 'All Projects - Vivaci Living')
@section('meta_keywords', 'project,vivaci,living,designers,interior')
@section('meta_description', 'Explore all projects made with love by Vivaci Living') 

@section('style')
    <style>
        .card .card-img-top {
            object-fit: cover;
        }

        .member-img-container {
            max-height: 350px;
        }

        .member-img {
            width: 100%;
        }

        @media (min-width:1200px) {
            .card .card-img-top {
                max-height: 350px;
            }
        }

        @media (max-width:1200px) {
            .card .card-img-top {
                max-height: 215px;
            }
        }

        /* @media (max-width:992px) {
            .member-img-container {
                max-height: 350px;
            }
        }
        @media (max-width:768px) {
            .member-img-container {
                max-height: 247px;
            }
        }
        @media (max-width:576px) {
            .member-img-container {
                max-height: 350px;
            }
        } */

        .project-card{
            height: 100%;
        }
        .project-card__image {
            height: 390px;
            width: 100%;
            position: relative;
        }
        .project-card__image::after {
            display: block;
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            content: '';
            background-color: rgba(24,24,24,.4);
            opacity: 0;
            
            transition: all .3s ease;
        }
        .project-card:hover .project-card__image::after {
            opacity: 1;
        }
        .project-card__image > img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .project-card__body {
            margin-top: 1.5rem;
        }
        .project-card__body > h3 {
            font-size: 1.4rem;
            text-transform: uppercase;
        }
        .project-card__link {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
            z-index: 1;
        }
    </style>
@endsection

@section('content')
    <section>
        <div class="container top-margin">
            <div class="row">
                <div class="col">
                    <div data-aos="fade-right">
                        <h2>Our {{ $projects->title }} projects</h2>
                        <p class="mt-3">{{ $projects->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-0 mt-sm-5 py-5">

            <div class="row g-5">

                @foreach ($category as $project)
                    <div class="col-12 col-sm-3">
                        <div class="project-card" data-aos="fade-up">

                            <div class="project-card__image">
                                <img src="{{ Voyager::image($project->image) }}" alt="">
                            </div>
                            <div class="project-card__body">
                                <h3>{{ $project->title }}</h3>
                            </div>
                            <a href="{{ url()->current() }}/{{ $project->slug }}" class="project-card__link"></a>

                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
@endsection
