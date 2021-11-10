@extends('frontend.layouts.main')

@section('content')
<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
</div>
<!-- End All Pages -->

<!-- Start blog -->
<div class="blog-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Blog</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
            </div>
        </div>

        <div class="row">
            @if(!empty($articles))
            @foreach($articles as $article)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-box-inner">
                    <div class="blog-img-box">
                        <img class="img-fluid" src="{{ asset($article->image)}}" alt="">
                    </div>
                    <div class="blog-detail">
                        <h4><a style="color: #0b93d5" href="{{ route('home.articleDetail',['slug' => $article->slug, 'id'=>$article->id]) }}">{{ $article->title }}</a></h4>
                        <ul>
                            <li><span style="font-size: 13px">bởi {{@$article->user->name}}</span></li>
                            <li>|</li>
                            <li><span style="font-size: 13px">cập nhật ngày {{ date('d/m/Y', strtotime($article->updated_at)) }}</span></li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                        <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</div>
<!-- End blog -->

<!-- Start Contact info -->
<div class="contact-imfo-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4 arrow-right">
                <i class="fa fa-volume-control-phone"></i>
                <div class="overflow-hidden">
                    <h4>Phone</h4>
                    <p class="lead">
                        +01 123-456-4590
                    </p>
                </div>
            </div>
            <div class="col-md-4 arrow-right">
                <i class="fa fa-envelope"></i>
                <div class="overflow-hidden">
                    <h4>Email</h4>
                    <p class="lead">
                        yourmail@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <i class="fa fa-map-marker"></i>
                <div class="overflow-hidden">
                    <h4>Location</h4>
                    <p class="lead">
                        800, Lorem Street, US
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact info -->
@endsection
