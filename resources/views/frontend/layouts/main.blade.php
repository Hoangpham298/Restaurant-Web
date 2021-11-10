<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Live Dinner Restaurant - Responsive HTML5 Template</title>
    <base href="{{ asset('') }}">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
{{--    <link rel="shortcut icon" href="#"/>--}}
    <!-- Site Icons -->
{{--    <link rel="shortcut icon" href="/frontend/images/favicon.ico" type="image/x-icon">--}}
    <link rel="apple-touch-icon" href="/frontend/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="/frontend/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/frontend/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/frontend/css/custom.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
@include('frontend.layouts.header')
<!-- END nav -->
{{--@include('frontend.layouts.sidebar')--}}
{{--<section class="ftco-section">--}}
{{--    <div class="container">--}}

{{--    </div>--}}
{{--</section>--}}
@yield('content')

@yield('contact')

@yield('checkout')

@include('frontend.layouts.footer')


<!-- loader -->
{{--<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>--}}

<script src="/frontend/js/jquery-3.2.1.min.js"></script>
<script src="/frontend/js/popper.min.js"></script>
<script src="/frontend/js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="/frontend/js/jquery.superslides.min.js"></script>
{{--<script src="/frontend/js/images-loded.min.js"></script>--}}
<script src="/frontend/js/isotope.min.js"></script>
<script src="/frontend/js/baguetteBox.min.js"></script>
<script src="/frontend/js/form-validator.min.js"></script>
<script src="/frontend/js/contact-form-script.js"></script>
<script src="/frontend/js/custom.js"></script>

@yield('my_js')
@yield('product')
@yield('my_javascript')
</body>
</html>
