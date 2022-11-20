@extends('layouts.layout')

@section('content')

<section>
    <div class="container top-margin">

        <div class="row py-5 mt-3">
            <div class="col-6">
                <h2 class="fw-bold">{{ $service->title }}</h2>
            </div>
            <div class="col-6">
                <div>
                    <div><p class="text-muted">{{ $service->description }}</p></div>
                </div>
            </div>
        </div>
    
    </div>
</section>

<section>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 p-0" style="height: 300px">
                <div class="h-100" style="background: url({{ Voyager::image($service->image) }}) no-repeat fixed center;background-size:cover">
                </div>
            </div>
        </div>
    
    </div>
</section>

<section>
    <div class="container">
    
        <div class="row">
            <div class="col-12 p-5">
                <h3 class="text-center fw-bold">See us on action</h3>
                <div class="row gy-3">
                    {{-- {{ $images = json_decode($service->gallery); }}
                    @foreach($images as $image)
                    <div class="col-4" style="height: 240px">
                        <img class="h-100 w-100" src="{{Voyager::image($image)}}" />
                    </div>
                    @endforeach --}}
                    @foreach(json_decode($service->gallery) as $image)
                    <div class="col-4" style="height: 240px">
                        <img class="h-100 w-100" src="{{Voyager::image($image)}}" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    
    </div>
</section>

@endsection