@extends('layouts.default')
@section('content')

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{URL::asset('assets/img/a-remeny-rabjai.jpg')}}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Reon Filmek</h1>
                        <span class="subheading">5 film, melyet mindenképp látnod kell</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="movie.html">
                        <h2 class="post-title">A remény rabjai</h2>
                        <h3 class="post-subtitle">amerikai filmdráma, 1994</h3>
                    </a>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="movie.html">
                        <h2 class="post-title">A keresztapa</h2>
                        <h3 class="post-subtitle">amerikai gengszterfilm, filmdráma, 1972</h3>
                    </a>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="movie.html">
                        <h2 class="post-title">Schindler listája
                        </h2>
                        <h3 class="post-subtitle">amerikai történelmi dráma, 1993</h3>
                    </a>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="movie.html">
                        <h2 class="post-title">Ponyvaregény</h2>
                        <h3 class="post-subtitle">amerikai krimi vígjáték, 1994
                        </h3>
                    </a>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="movie.html">
                        <h2 class="post-title">A bárányok hallgatnak
                        </h2>
                        <h3 class="post-subtitle">amerikai pszichothriller, 1991</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection