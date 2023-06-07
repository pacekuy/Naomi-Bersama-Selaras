@extends('frontend.layouts.main')

@section('company-active', 'active')

@section('content')

<div class="full-title">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Company</h1>
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">Company Data</li>
            </ol>
        </div>
    </div>
</div>

<div class="item-pro">
    <div class="container">
        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-7">
                <h3 class="my-3">
                    <h2>COMPANY DATA</h2>
                </h3>
                <p>
                </p>
                <h3 class="my-3">
                    <h2>PROFILE</h2>
                </h3>
                <ul class="mt-4">
                    <li><span>Company Name :</span><span>PT Naomi Bersama Selaras</span></li>
                    <li><span>Address :</span><span>Jl. Raya Narogong Km 12.5, Cileungsi, Bogor, Jawa Barat.</span>
                    </li>
                    <li><span>Email :</span><span>naomibersamaselaras@gmail.com </span></li>
                    <li><span>Website :</span><span>www.naomibersamaselaras.co.id</span></li>
                    
                </ul>

            </div>
        </div>

        <p>
            <div class="team-members-box">
                <h2>STRUCTURE ORGANIZATION</h2>
                <center><img src="{{ asset('frontend/images/struk_org.jpg')}}"></center>
            </div>
        </p>

        <p>
            <div class="team-members-box">
                <h2>COMPANY LEGALITY</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <center><img style="width: 100%;" src="{{ asset('frontend/images/piagam1.jpg')}}"></center>
                    </div>
                    <div class="col-lg-6">
                        <center><img style="width: 100%;" src="{{ asset('frontend/images/piagam2.jpg')}}"></center>
                    </div>
                    <div class="col-lg-6">
                        <center><img style="width: 100%;" src="{{ asset('frontend/images/piagam3.jpg')}}"></center>
                    </div>
                    <div class="col-lg-6">
                        <center><img style="width: 100%;" src="{{ asset('frontend/images/piagam4.jpg')}}"></center>
                    </div>
                    <div class="col-lg-6">
                        <center><img style="width: 100%;" src="{{ asset('frontend/images/piagam5.jpg')}}"></center>
                    </div>
                    <div class="col-lg-6">                        
                        <center><img style="width: 100%;" src="{{ asset('frontend/images/piagam6.jpg')}}"></center>
                    </div>
                </div>
            </div>
        </p>


    </div>
    <!-- /.container -->
</div>

<!-- Contact Us -->
<div class="touch-line">

    <div class="container">

        <div class="row">

            <div class="col-md-8">

                <p>PT. Naomi Bersama Selaras is a company engaged in infrastructure and land mapping. We provide consulting services using the latest technology in presenting effective and efficient infrastructure and land mapping solutions. With our team's years of experience, we believe we can provide the best solutions for our clients.</p>

            </div>

            <div class="col-md-4">

                <a class="btn btn-lg btn-secondary btn-block" href="{{url('contact')}}""> Contact Us </a>

            </div>

        </div>

    </div>

</div>


@endsection