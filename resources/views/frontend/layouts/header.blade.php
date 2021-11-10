
<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <img src="/frontend/images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="#">Trang Chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home.about') }}">Giới Thiệu</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Thực đơn</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            @foreach($categories as $cate)
                                <a class="dropdown-item" href="{{ route('home.category',['id'=>$cate->id])}}">{{ $cate->name }}</a>
{{-- {{ route('home.category',['slug'=>$cate->slug])}} lấy route theo slugv--}}
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Đặt bàn</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="{{ route('home.reservation') }}">Đặt bàn ngay</a>
                            <a class="dropdown-item" href="{{ route('home.stuff') }}">Đầu bếp</a>
                            <a class="dropdown-item" href="{{ route('home.gallery') }}">Ảnh</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home.article') }}">Tin Tức</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('home.contact') }}">Liên hệ</a></li>
                    <li class="nav-item cta cta-colored"><a href="{{ route('home.cart') }}" style="font-weight: 600;font-size: 14px" class="nav-link">
                            <span class="fa fa-shopping-cart" style="font-size:14px"></span>
                            [{{ !empty(session('totalItem')) ? session('totalItem') : 0 }}
                            ]</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->
