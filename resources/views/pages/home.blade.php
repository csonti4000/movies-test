@extends('layouts.default')
@section('content')

    <x-carousel-component title="Reon Filmek" sub-title="5 film, melyet mindenképp látnod kell" :img-url="URL::asset('assets/img/a-remeny-rabjai.jpg')"/>

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @foreach ($movies as $movie)
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="{{ route('movie', $movie->id) }}">
                            <h2 class="post-title">{{ $movie->title}}</h2>
                            <h3 class="post-subtitle">{{ $movie->genre}}, {{$movie->release_date->format('Y')}}</h3>
                        </a>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                @endforeach
            </div>
        </div>
    </div>

@endsection