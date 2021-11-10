@extends('frontend.layouts.main')
@section('content')

<!-- Start slides -->
<div id="slides" class="cover-slides">
    <ul class="slides-container">
        <li class="text-left" >
            <img src="/frontend/images/slider-01.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Live Dinner Restaurant</strong></h1>
                        <p class="m-b-40">Live Dinner Restaurant với sứ mệnh là đem lại những tinh hoa ẩm thực từ khắp mọi nơi,<br> được chế biến bởi những đầu bếp hàng đầu.<br> Chúc khách hàng sẽ có những trải nghiệm tuyệt với Live Dinner Restaurant </p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Đặt bàn ngay</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-left" >
            <img src="/frontend/images/slider-02.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Live Dinner Restaurant</strong></h1>
                        <p class="m-b-40">Live Dinner Restaurant với sứ mệnh là đem lại những tinh hoa ẩm thực từ khắp mọi nơi,<br> được chế biến bởi những đầu bếp hàng đầu.<br> Chúc khách hàng sẽ có những trải nghiệm tuyệt với Live Dinner Restaurant</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-left" >
            <img src="/frontend/images/slider-03.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
                        <p class="m-b-40">Live Dinner Restaurant với sứ mệnh là đem lại những tinh hoa ẩm thực từ khắp mọi nơi,<br> được chế biến bởi những đầu bếp hàng đầu.<br> Chúc khách hàng sẽ có những trải nghiệm tuyệt với Live Dinner Restaurant</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End slides -->

<!-- Start About -->
<div class="about-section-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="inner-column">
                    <h1>Welcome To <span>Live Dinner Restaurant</span></h1>
                    <h4>Little Story</h4>
                    <p>Ẩm thực luôn là cầu nối hấp dẫn nhất giữa người với người, là “sợi dây tơ hồng” để gắn kết tình cảm trong mọi mối quan hệ. Hiểu được điều đó, Live Dinner Restaurant xuất hiện như một địa chỉ để chúng ta thưởng thức những hương sắc của những tinh hoa ẩm thực. kết giao bằng hữu và trải nghiệm những điều thú vị trong cuộc sống. </p>
                    <p>Live Dinner đi vào lòng ngay cả những thực khách sành ăn nhất bởi những món ngon gia đình ăn ngon miệng, khó quên. Với đội ngũ đầu bếp lâu năm kinh nghiệm, thực khách sẽ được thưởng thức các món ăn truyền thống của dân gian Việt Nam với hương vị đặc trưng mà không nơi đâu có được.</p>
                    <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <img src="/frontend/images/about-img.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start QT -->
<div class="qt-box qt-background">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <p class="lead ">
                    " If you're not the one cooking, stay out of the way and compliment the chef. "
                </p>
                <span class="lead">Michael Strahan</span>
            </div>
        </div>
    </div>
</div>
<!-- End QT -->

<!-- Start Menu -->
<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Thực Đơn</h2>
                    <p>Hôm nay ăn gì với Live Dinner nào?</p>
                </div>
            </div>
        </div>

        <div class="row inner-menu-box">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Đồ uống </a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Món Khai Vị</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Món Chính</a>
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
                                        <p class="price">Giá Gốc: <span class="mr-2 price-dc">{{ number_format($product -> price,0,",",".") }} đ</span><br>Giá Khuyến Mại: <span>{{ number_format($product -> sale,0,",",".") }} đ</span></p>
                                        <p><a  title="Add to cart" href="{{ route('home.cart.add-to-cart', ['id' => $product->id]) }}" class="btn btn-success cart-button btn-sm">Thêm vào giỏ hàng</a></p>                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Menu -->

<!-- Start Gallery -->
<div class="gallery-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Bộ sưu tập</h2>
                </div>
            </div>
        </div>
        <div class="tz-gallery">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <a class="lightbox" href="/frontend/images/gallery-img-01.jpg">
                        <img class="img-fluid" src="/frontend/images/gallery-img-01.jpg" alt="Gallery /frontend/images">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <a class="lightbox" href="/frontend/images/gallery-img-02.jpg">
                        <img class="img-fluid" src="/frontend/images/gallery-img-02.jpg" alt="Gallery /frontend/images">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <a class="lightbox" href="/frontend/images/gallery-img-03.jpg">
                        <img class="img-fluid" src="/frontend/images/gallery-img-03.jpg" alt="Gallery /frontend/images">
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <a class="lightbox" href="/frontend/images/gallery-img-04.jpg">
                        <img class="img-fluid" src="/frontend/images/gallery-img-04.jpg" alt="Gallery /frontend/images">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <a class="lightbox" href="/frontend/images/gallery-img-05.jpg">
                        <img class="img-fluid" src="/frontend/images/gallery-img-05.jpg" alt="Gallery /frontend/images">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <a class="lightbox" href="/frontend/images/gallery-img-06.jpg">
                        <img class="img-fluid" src="/frontend/images/gallery-img-06.jpg" alt="Gallery /frontend/images">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Gallery -->

<!-- Start Customer Reviews -->
<div class="customer-reviews-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Phản hồi từ khách hàng</h2>
                    <p>Nhà hàng luôn luôn lắng nghe đánh giá từ khách hàng để đem lại những trải nghiệm tốt nhất cho bạn</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mr-auto ml-auto text-center">
                <div id="reviews" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner mt-4">
                        <div class="carousel-item text-center active">
                            <div class="img-box p-1 border rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="/frontend/images/quotations-button.png" alt="">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
                            <h6 class="text-dark m-0">Web Developer</h6>
                            <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                        </div>
                        <div class="carousel-item text-center">
                            <div class="img-box p-1 border rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="/frontend/images/quotations-button.png" alt="">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
                            <h6 class="text-dark m-0">Web Designer</h6>
                            <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                        </div>
                        <div class="carousel-item text-center">
                            <div class="img-box p-1 border rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="/frontend/images/quotations-button.png" alt="">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
                            <h6 class="text-dark m-0">Seo Analyst</h6>
                            <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Customer Reviews -->

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

<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>


@endsection
