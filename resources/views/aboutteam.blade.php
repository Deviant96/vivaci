@extends('layouts.layout')

@section('content')
    <section>

        <div class="container-fluid">

                <div class="row">
                    <div class="col-6 d-flex flex-column justify-content-center px-5">
                        <div class="ms-5">
                            <h2 class="fw-bold fs-1">Explore our production team at Vivaci Living</h2>
                            <div class="mt-3">Our talented designers and craftsmen have collaborated to achieve high standard
                                to make sure you as our customers are fully satisfied with our services.</div>
                        </div>
                    </div>
                    <div class="col-6" style="padding:0">
                        <div class="text-end" style="background: url(https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=800) no-repeat center;background-size:cover;min-height: 100vh;">
                            
                        </div>
                    </div>
                </div>

        </div>

    </section>

    <section>

        <div class="container py-5">

            <div class="row">
                <div class="col-12">
                    <div class="row g-5">

                        @foreach($em as $e)
                        <div class="col-4">
                            <div style="height: 240px">
                                <img class="h-100 w-100"
                                    src="{{Voyager::image($e->photo)}}" />
                            </div>

                            
    

                            {{-- Voyager::image($employee) --}}
                            <h3 class="mt-3">{{ $e->name }}</h3>
                            <p class="mt-2">{{ $e->title }}</p>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
