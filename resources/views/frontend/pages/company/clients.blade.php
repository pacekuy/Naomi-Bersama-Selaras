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

                <li class="breadcrumb-item active">Partner</li>

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
                    <h2>PARTNERS</h2>
                </h3>

                <p>

                </p>



            </div>

        </div>



        <div class="team-members-box">

            <!--	  <h2>SUSUNAN PENGURUS</h2>  -->

            <img src="{{ asset('frontend/images/client1.jpg')}}">

        </div>



        <p>

            <div class="team-members-box">

                <img src="{{ asset('frontend/images/client2.jpg')}}">

            </div>

        </p>



        <p>

            <div class="team-members-box">

                <img src="{{ asset('frontend/images/client3.jpg')}}">

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

                <p>PT Sumber Mas Konstruksi Tbk menjadi kelompok Perusahaan Jasa Konstruksi Umum dan Telekomunikasi dan
                    Jasa Engineering yang terkemuka seperti dibidang Perumahan, Jalan, Jembatan dan SACME, Pemasangan
                    (Installation), Pengujian (Testing), Kelayakan (Commissioning) dan Pekerjaan Sarana Penunjang Base
                    Transceiver Station (BTS) lainnya</p>

            </div>

            <div class="col-md-4">

                <a class="btn btn-lg btn-secondary btn-block" href="contact.html"> Contact Us </a>

            </div>

        </div>

    </div>

</div>


@endsection