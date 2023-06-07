<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <title> PT. Naomi Bersama Selaras </title>

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Fontawesome CSS -->

    <link href="{{ asset('frontend/css/all.css') }}" rel="stylesheet">

    <!-- Owl Carousel CSS -->

    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Owl Carousel CSS -->

    <link href="{{ asset('frontend/css/jquery.fancybox.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{asset('frontend/images/favicon.png')}}">

</head>

<body>

    <div class="wrapper-main">

        @include('frontend.partials.header')


        <!-- Content -->

        @yield('content')

        <!-- End Content -->


        <!-- /.container -->

        <!--footer starts from here-->

        @include('frontend.partials.footer')

    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="https://kit.fontawesome.com/43d66d6c2c.js" crossorigin="anonymous"></script>

    <script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ ('frontend/js/imagesloaded.pkgd.min.js') }}"></script>

    <script src="{{ ('frontend/js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ ('frontend/js/filter.js') }}"></script>

    <script src="{{ ('frontend/js/jquery.appear.js') }}"></script>

    <script src="{{ ('frontend/js/owl.carousel.min.js') }}"></script>

    <script src="{{ ('frontend/js/jquery.fancybox.min.js') }}"></script>

    <script src="{{ ('frontend/js/script.js') }}"></script>

</body>

</html>