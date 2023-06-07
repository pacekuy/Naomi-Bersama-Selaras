@extends('frontend.layouts.main')

@section('services-active', 'active')

@section('content')

<!-- full Title -->
<div class="full-title">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Services</h1>
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">Service Perusahaan</li>
            </ol>
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="container mt-5">
    <!-- Image Header -->

    <div class="row">
        <div class="col-lg-12">

            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class="left-ab">
                        <h3>Business Service</h3>
                        <ul>
                            <li>Land Preparation</li>
                            <li>Road Civil Building Construction</li>
                            <li>Gravel Excavation</li>
                            <li>Transportation Management Service</li>
                            <li>Electrical Civil Building Construction</li>
                            <li>Civil Building Construction of Bridge, Flyovers and underpasses</li>
                            <li>Telecomunication Civil Building Construction for Infrastructure Transportation</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
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