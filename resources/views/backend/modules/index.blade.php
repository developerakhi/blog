@extends('frontand.layouts.master')

@section('content')
    <div class="col-lg-12">
        <div class="blog-post">
            <div class="blog-thumb">
                <img style="border-top-left-radius: calc(1.25rem - 1px); border-top-right-radius: calc(1.25rem - 1px);" src="{{asset('frontand/assets/images/blog-post-01.jpg')}}" alt="">
            </div>
            <div class="down-content">
                <ul class="post-info bg-light" style="padding:5px; border-radious: 1px;">
                <li><a href="#"><i class="fa fa-user"> By Jone</i></a></li>
                <li><a href="#"><i class="fa fa-calendar"> 16 Dec, 2022</i></a></li>
                <li><a href="#"><i class="fa fa-caret-square-o-up"> Digital marketing</i></a></li>
                </ul>
                <a href="post-details.html"><h4 style="padding-top: 15px;">Delivering the best digital marketing</h4></a>
                <p>It is a long established fact that a reader will be ditracted by the readable content of a page when looking
                at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal ditribution o letters, as
                opposed to using content here content here marketing it look like readable Engilsh.</p>
                <a type="submit" class="btn btn-outline-success">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>


@endsection