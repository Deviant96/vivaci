@extends('layouts.layout')

{{-- Image zooming component --}}
@php($imageZoom = true)

@section('content')

<section>
    <div class="container top-margin">

        <div class="row py-3 mt-3">
            <div class="col-6 d-flex flex-column justify-content-end">
                <h2 class="fw-bold">{{ $project->title }}</h2>
                <div class="mb-0">{!! $project->desc !!}</div>
            </div>
            <div class="col-6 d-flex justify-content-end align-items-end">
                <div class="text-end">
                    <div><h4 class="fw-bold">{{ $project->location }}</h4></div>
                    <div><p class="text-muted">{{ $project->date }}</p></div>
                </div>
            </div>
        </div>
    
    </div>
</section>

<section>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 p-0" style="height: 300px">
                <div class="h-100" style="background: url({{Voyager::image($project->image)}}) no-repeat fixed center;background-size:cover">
                </div>
            </div>
        </div>
    
    </div>
</section>

<section>
    <div class="container">
    
        <div class="row">
            <div class="col-12 p-5">
                <h2>Gallery</h2>
                <div class="row gy-3">
                    <?php $images = json_decode($project->images); ?>
                    @foreach($images as $image)
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