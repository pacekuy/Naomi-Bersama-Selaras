@extends('frontend.layouts.main')

@section('home-active', 'active')

@section('content')

<header class="slider-main">

    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators">

            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

        </ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide One - Set the background image for this slide in the line below -->

            <div class="carousel-item active"
                style="background-image: url('{{ asset('frontend/images/construction1.jpg')}}')">

                <div class="carousel-caption d-none d-md-block">

                    <h3>Welcome to </h3>
                    <h3>PT. NAOMI BERSAMA SELARAS</h3>

                    <p>- Land Preparation -</p>

                </div>

            </div>

            <!-- Slide Two - Set the background image for this slide in the line below -->

            <div class="carousel-item" style="background-image: url('{{ asset('frontend/images/construction2.jpg')}}')">

                <div class="carousel-caption d-none d-md-block">


                    <h3>Welcome to </h3>
                    <h3>PT. NAOMI BERSAMA SELARAS</h3>

                    <p>- Road Civil Building Construction -</p>

                </div>

            </div>

            <!-- Slide Three - Set the background image for this slide in the line below -->

            <div class="carousel-item" style="background-image: url('{{ asset('frontend/images/construction3.jpg')}}')">

                <div class="carousel-caption d-none d-md-block">


                    <h3>Welcome to </h3>
                    <h3>PT. NAOMI BERSAMA SELARAS</h3>

                    <p>- Gravel Excavation -</p>

                </div>

            </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

        </a>

        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

        </a>

    </div>

</header>



<!-- Page Content -->

<div class="container">

    <!-- About Section -->

    <div class="about-main">

        <div class="row">

            <div class="col-lg-6">

                <h2>About Us</h2>

                <p style="line-height: 50px;">PT. Naomi Bersama Selaras is a company engaged in infrastructure and land mapping. We provide
                    consulting services using the latest technology in presenting effective and efficient infrastructure
                    and land mapping solutions. With our team's years of experience, we believe we can provide the best
                    solutions for our clients.
                </p>

            </div>

            <div class="col-lg-6">

                <img class="img-fluid rounded" src="{{ asset('frontend/images/company.jpg')}}" alt="" />

            </div>

        </div>

        <!-- /.row -->

    </div>

</div>



<div class="services-bar">

    <div class="container">

        <h1 class="py-4">Our Best Services </h1>

        <!-- Services Section -->

        <div class="row">

            <div class="col-lg-4 mb-4">

                <div class="card h-100">

                    <div class="card-img">

                        <img class="img-fluid" src="{{ asset('frontend/images/services/s8.png')}}" alt="" />

                    </div>

                    <div class="card-body">

                        <h4 class="card-header text-center"> Land Preparation Bojong Koneng Project</h4>

                        <!--<p class="card-text">SITE DAGO GOLF – BANDUNG (COLLOCATION) - XL AXIATA DAN SITE CIBANTENG – BOGOR (STRAIGHTENING / PERKUATAN) – SMART REND</p>-->

                    </div>

                </div>

            </div>

            <div class="col-lg-4 mb-4">

                <div class="card h-100">

                    <div class="card-img">

                        <img class="img-fluid" src="{{ asset('frontend/images/services/s9.png')}}" alt="" />

                    </div>

                    <div class="card-body">

                        <h4 class="card-header text-center"> Land Preparation Bojong Koneng Project</h4>

                        <!--<p class="card-text">Project perumahan Kuala Tanjung 1 dan 2</p>-->

                    </div>

                </div>

            </div>

            <div class="col-lg-4 mb-4">

                <div class="card h-100">

                    <div class="card-img">

                        <img class="img-fluid" src="{{ asset('frontend/images/services/s11.png')}}" alt="" />

                    </div>

                    <div class="card-body">

                        <h4 class="card-header text-center"> Land Preparation Bojong Koneng Project</h4>

                        <!--<p class="card-text">SITE BEDUGUL – Jl. Denpasar Singaraja BALI TOWER STAKING MONOPOLE 12 m (Telkomsel)</p>-->

                    </div>

                </div>

            </div>



        </div>

        <!-- /.row -->

    </div>

</div>



<div class="container">

    <!-- Portfolio Section -->

    <div class="portfolio-main">

        <h2>Our Portfolio</h2>

        <div class="col-lg-12">

            <div class="project-menu text-center">

                <button class="btn btn-primary active" data-filter="*">All</button>

                <button data-filter=".business" class="btn btn-primary">Project 1</button>

                <button data-filter=".travel" class="btn btn-primary">Project 2</button>

                <button data-filter=".financial" class="btn btn-primary">Project 3</button>

                <button data-filter=".academic" class="btn btn-primary">Project 4</button>

            </div>

        </div>

        <div id="projects" class="projects-main row">

            <div class="col-lg-4 col-sm-6 pro-item portfolio-item financial">

                <div class="card h-100">

                    <div class="card-img">

                        <a href="{{ asset('frontend/images/portfolio/grapari_home.jpg')}}" data-fancybox="images">

                            <img class="card-img-top" src="{{ asset('frontend/images/portfolio/grapari_home.jpg')}}"
                                alt="" />

                            <div class="overlay"><i class="fas fa-arrows-alt"></i></div>

                        </a>

                    </div>

                    <div class="card-body">

                        <h4 class="card-title">

                            <a href="#">Instalasi GIL 500kV PLTGU</a>

                        </h4>

                    </div>

                </div>

            </div>

            <!--<div class="col-lg-4 col-sm-6 pro-item portfolio-item business academic">-->

            <div class="col-lg-4 col-sm-6 pro-item portfolio-item business">

                <div class="card h-100">

                    <div class="card-img">

                        <a href="{{ asset('frontend/images/portfolio/kantor_home.jpg')}}" data-fancybox="images">

                            <img class="card-img-top" src="{{ asset('frontend/images/portfolio/kantor_home.jpg')}}"
                                alt="" />

                            <div class="overlay"><i class="fas fa-arrows-alt"></i></div>

                        </a>

                    </div>

                    <div class="card-body">

                        <h4 class="card-title">

                            <a href="#">Persiapan Erection GITET 275 & 150kV</a>

                        </h4>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-sm-6 pro-item portfolio-item travel">

                <div class="card h-100">

                    <div class="card-img">

                        <a href="{{ asset('frontend/images/portfolio/faskes_home.jpg')}}" data-fancybox="images">

                            <img class="card-img-top" src="{{ asset('frontend/images/portfolio/faskes_home.jpg')}}"
                                alt="" />

                            <div class="overlay"><i class="fas fa-arrows-alt"></i></div>

                        </a>

                    </div>

                    <div class="card-body">

                        <h4 class="card-title">

                            <a href="#">Instalasi HV Equipment GITET 275kV</a>

                        </h4>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-sm-6 pro-item portfolio-item business">

                <div class="card h-100">

                    <div class="card-img">

                        <a href="{{ asset('frontend/images/portfolio/hotel_home.jpg')}}" data-fancybox="images">

                            <img class="card-img-top" src="{{ asset('frontend/images/portfolio/hotel_home.jpg')}}"
                                alt="" />

                            <div class="overlay"><i class="fas fa-arrows-alt"></i></div>

                        </a>

                    </div>

                    <div class="card-body">

                        <h4 class="card-title">

                            <a href="#">Erection GITET 275kV</a>

                        </h4>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-sm-6 pro-item portfolio-item travel">

                <div class="card h-100">

                    <div class="card-img">

                        <a href="{{ asset('frontend/images/portfolio/mesjid_home.jpg')}}" data-fancybox="images">

                            <img class="card-img-top" src="{{ asset('frontend/images/portfolio/mesjid_home.jpg')}}"
                                alt="" />

                            <div class="overlay"><i class="fas fa-arrows-alt"></i></div>

                        </a>

                    </div>

                    <div class="card-body">

                        <h4 class="card-title">

                            <a href="#">Instalasi HV Equipment GITET 275kV</a>

                        </h4>

                    </div>

                </div>

            </div>

            <!--<div class="col-lg-4 col-sm-6 pro-item portfolio-item financial academic">-->

            <div class="col-lg-4 col-sm-6 pro-item portfolio-item academic">

                <div class="card h-100">

                    <div class="card-img">

                        <a href="{{ asset('frontend/images/portfolio/rumah_home.jpg')}}" data-fancybox="images">

                            <img class="card-img-top" src="{{ asset('frontend/images/portfolio/rumah_home.jpg')}}"
                                alt="" />

                            <div class="overlay"><i class="fas fa-arrows-alt"></i></div>

                        </a>

                    </div>

                    <div class="card-body">

                        <h4 class="card-title">

                            <a href="#">Bulukumba - Erection GI 150kV Bay Trafo</a>

                        </h4>

                    </div>

                </div>

            </div>

        </div>

        <!-- /.row -->

    </div>

</div>





<!-- Contact Us -->

<div class="touch-line">

    <div class="container">

        <div class="row">

            <div class="col-md-8">

                <p>PT. Naomi Bersama Selaras is a company engaged in infrastructure and land mapping. We provide consulting services using the latest technology in presenting effective and efficient infrastructure and land mapping solutions. With our team's years of experience, we believe we can provide the best solutions for our clients.</p>

            </div>

            <div class="col-md-4">

                <a class="btn btn-lg btn-secondary btn-block" href="{{url('contact')}}"> Contact Us </a>

            </div>

        </div>

    </div>

</div>

@endsection