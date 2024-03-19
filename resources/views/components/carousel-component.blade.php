<header>
    <div class="owl-carousel">
        @foreach($movies as $movie)
            <div class="carousel-item-inner" style="background-image: url('{{URL::asset('assets/img/'.$movie->img_link)}}')">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading carousel-title-bg">
                            <h1>{{$movie->title}}</h1>
                            <span class="subheading">{{ $movie->genre . ', '. $movie->release_date->format('Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>{{$title}}</h1>
                    <span class="subheading">{{$subTitle}}</span>
                </div>
            </div>
        </div>
    </div> --}}
</header>

@section('script')
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 1,
                margin: 10,
                autoHeight: true,
                autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:false,
            });
        });
    </script>
@endsection