@extends('welcome')
@include('header')
@section('content')

<!-- End page title -->
<!-- Start our blog area -->
<section class="our-blog-area pt-40 pb-60">
    <div class="container">
    <h3 style="color:black;">İhtiyaçlar</h3>
        <div class="row">
            <!-- Start single blog -->
            @foreach($ihtiyac as $i)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mb-30">
                <div class="blo-image-and-date">
                    <img style="width:100%" src="/storage/images/{{$i->image}}">
                        <img src="{{asset($i->image)}}" alt="">
                    </div>
                    <div class="blog-text">
                        <h3 class="text-center" style="text-center;color:black;">{{$i->donate}}</h3>
                        <p>{{$i->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End single blog -->
    </div>
</section>
<!-- End our blog area -->
@endsection
@include('footer')