@extends('frontend.layouts.main')

@section('content')

<!-- Start header -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
</div>
<!-- End header -->

<!-- Start About -->
<div class="about-section-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 text-center">
                <div class="inner-column">
                    <h1>Welcome To <span>Live Dinner Restaurant</span></h1>
                    <h4>Little Story</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                    <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
                    <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6" >
                <img src="/frontend/images/about-img.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start Menu -->
<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Special Menu</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
            </div>
        </div>

        <div class="row inner-menu-box">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Drinks</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Lunch</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Dinner</a>
                </div>
            </div>

            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row">

                            @foreach($newProducts as $product)
                                <div class="col-lg-4 col-md-6 special-grid drinks">
                                    <div class="gallery-single fix">
                                        <img src="{{ asset($product->image)  }}" class="img-fluid" alt="Image" style="height: 180px; width: 250px">
                                        <div class="why-text">
                                            <h3><a href="{{ route('home.productDetail',['slug' => $product->slug]) }}">{{ $product->name }}</a></h3>
                                            <p class="price">Gi?? G???c: <span class="mr-2 price-dc">{{ number_format($product -> price,0,",",".") }} ??</span><br>Gi?? Khuy???n M???i: <span>{{ number_format($product -> sale,0,",",".") }} ??</span></p>
                                            <p>" G???i y??u th????ng trong t???ng m??n ??n "</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <img src="/frontend/images/img-01.jpg" class="img-fluid" alt="Image">
                                    <div class="why-text">
                                        <h4>Special Drinks 1</h4>
                                        <p>Sed id magna vitae eros sagittis euismod.</p>
                                        <h5> $7.79</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <img src="/frontend/images/img-02.jpg" class="img-fluid" alt="Image">
                                    <div class="why-text">
                                        <h4>Special Drinks 2</h4>
                                        <p>Sed id magna vitae eros sagittis euismod.</p>
                                        <h5> $9.79</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <img src="/frontend/images/img-03.jpg" class="img-fluid" alt="Image">
                                    <div class="why-text">
                                        <h4>Special Drinks 3</h4>
                                        <p>Sed id magna vitae eros sagittis euismod.</p>
                                        <h5> $10.79</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 special-grid lunch">
                                <div class="gallery-single fix">
                                    <img src="/frontend/images/img-04.jpg" class="img-fluid" alt="Image">
                                    <div class="why-text">
                                        <h4>Special Lunch 1</h4>
                                        <p>Sed id magna vitae eros sagittis euismod.</p>
                                        <h5> $15.79</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 special-grid lunch">
                                <div class="gallery-single fix">
                                    <img src="/frontend/images/img-05.jpg" class="img-fluid" alt="Image">
                                    <div class="why-text">
                                        <h4>Special Lunch 2</h4>
                                        <p>Sed id magna vitae eros sagittis euismod.</p>
                                        <h5> $18.79</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 special-grid lunch">
                                <div class="gallery-single fix">
                                    <img src="/frontend/images/img-06.jpg" class="img-fluid" alt="Image">
                                    <div class="why-text">
                                        <h4>Special Lunch 3</h4>
                                        <p>Sed id magna vitae eros sagittis euismod.</p>
                                        <h5> $20.79</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 special-grid dinner">
                                <div class="gallery-single fix">
                                    <img src="/frontend/images/img-07.jpg" class="img-fluid" alt="Image">
                                    <div class="why-text">
                                        <h4>Special Dinner 1</h4>
                                        <p>Sed id magna vitae eros sagittis euismod.</p>
                                        <h5> $25.79</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 special-grid dinner">
                                <div class="gallery-single fix">
                                    <img src="/frontend/images/img-08.jpg" class="img-fluid" alt="Image">
                                    <div class="why-text">
                                        <h4>Special Dinner 2</h4>
                                        <p>Sed id magna vitae eros sagittis euismod.</p>
                                        <h5> $22.79</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 special-grid dinner">
                                <div class="gallery-single fix">
                                    <img src="/frontend/images/img-09.jpg" class="img-fluid" alt="Image">
                                    <div class="why-text">
                                        <h4>Special Dinner 3</h4>
                                        <p>Sed id magna vitae eros sagittis euismod.</p>
                                        <h5> $24.79</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Menu -->

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


</html>
@endsection

