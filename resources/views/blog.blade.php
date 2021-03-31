@extends('welcome')
@include('header')
@section('content')
<section class="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title text-center">
                    <h1>Blog</h1>
                </div>
                <div class="breadcrumbs-area  text-center">
                    <ol class="breadcrumbs">
                        <li><a href="#">Anasayfa</a></li>
                        <li class="active">Blog</li>
                    </ol>
                </div>
                <div class="back-home">
                    <a href="index.html"><i class="fa fa-arrow-left" aria-hidden="true"></i> ANASAYFAYA DÖN</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End page title -->
<!-- Start our blog area -->
<section class="our-blog-area pt-90 pb-60">
    <div class="container">
        <div class="row">
            <!-- Start single blog -->
            @foreach($blog as $bloglar)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mb-30">
                <div class="blo-image-and-date">
                    <img style="width:100%" src="/storage/images/{{$bloglar->image}}">
                        <img src="{{asset($bloglar->image)}}" alt="">
                    </div>
                    <div class="blog-text">
                        <h3 class="text-center" style="text-center;color:black;">{{ ($bloglar->name)}}</h3>
                    </div>
                    <div style="margin-left:10px">
                        <h3 style="color:black;font-size:15px;">	{!! \Illuminate\Support\Str::words($bloglar->content, 20,'....')  !!}</h3>
                    </div>
                    <a style="float:right;" href="{{ route('blogshow',$bloglar->id) }}">Devamını Oku..</a>
                </div>
            </div>
            @endforeach
            <!-- End single blog -->
        </div>
    </div>
</section>
<!-- End our blog area -->
@endsection
@include('footer')
