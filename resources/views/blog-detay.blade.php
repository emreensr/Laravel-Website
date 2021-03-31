@extends('welcome')
@include('header')
@section('content')

            <!-- Start about content area -->
            <section class="about-content-area pt-90 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-content">
                                <!-- Start section title -->
                                <div class="section-title text-center">
                                    <h2> {{$adminBlog->name}}<span></span></h2>
                                    <img src="/assets/img/title-bottom.png" alt="">
                                </div>
                                <!-- End section title -->
                                <p>{{$adminBlog->content}}</p>
                               

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-image">
                            <img style="width:100%" src="/storage/images/{{$adminBlog->image}}">
                        <img src="{{asset($adminBlog->image)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End about content area -->

@endsection
@include('footer')