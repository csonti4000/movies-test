@extends('layouts.default')
@section('content')

    <x-header-component :title="$movie->title" :sub-title="$movie->genre . ', ' . $movie->release_date->format('Y')" :img-url="URL::asset('assets/img/keresztapa.jpg')"/>

    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>{{ $movie->description }}</p>
                </div>
            </div>
        </div>
    </article>

@endsection