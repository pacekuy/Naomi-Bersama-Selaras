@extends('frontend.layouts.main')

@section('company-active', 'active')

@section('content')

<!-- full Title -->
<div class="full-title">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Company</h1>
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">Company Profile</li>
            </ol>
        </div>
    </div>
</div>

<div class="about-inner">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-6">
                <div class="right-ab">
                    <img class="img-fluid rounded mb-4" src="{{asset('frontend/images/about-img.jpg')}}" alt="" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="left-ab">
                    <h3>Profile Company</h3>
                    <p style="line-height: 40px;">PT. Naomi Bersama Selaras is a company engaged in infrastructure and land mapping. We provide
                        consulting services using the latest technology 
                    </p>
                    <p style="line-height: 40px;">
                    in presenting effective and efficient
                        infrastructure and land mapping solutions. With our team's years of experience, we believe we
                        can provide the best solutions for our clients.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>




<div class="about-inner mt-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-6">
                <div class="left-ab">
                    <h3>Our Mission</h3>
                    <ul>
                        <li>Memuaskan kebutuhan Pelanggan</li>
                        <li>Mengembangkan Karyawan</li>
                        <li>Mendukung pembangunan</li>
                        <li>Mengutamakan keselamatan</li>
                        <li>Memaksimalkan nilai perusahaan bagi Pemegang Saham</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-ab">
                    <img class="img-fluid rounded mb-4" src="{{asset('frontend/images/mission-img.jpg')}}" alt="" />
                </div>
            </div>
        </div>

        <div style="margin-top: 76px;" class="row">
            <div class="col-lg-6">
                <div class="right-ab">
                    <img class="img-fluid rounded mb-4" src="{{asset('frontend/images/vision-img.jpg')}}" alt="" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="left-ab">
                    <h3>Our Vision</h3>
                    <p style="line-height: 40px;">Memberikan Pelayaan Prima yang berkwalitas dan efesiensi dalam bidang Jasa Konstruksi Umum.
                    </p>

                    <p style="line-height: 40px;">Menjadi bagian dari pengerak pembangunan dan pengembangan dalam bidang Jasa Konstruksi Umum agar
                        menuju bangsa yang memiliki asset yang bernilai produktifitas tinggi ( hight productifity )
                        untuk mengisi kebutuhan usaha ( business demand ) didalam maupun luar Negeri. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <!-- Team Members -->
    <div class="team-members-box">
        <h2>Company Advantage</h2>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <p style="line-height: 40px;">❖ Latest Technology <br>
                    We use the latest technology in providing services in infrastructure and land mapping for our clients. This is to ensure accuracy and efficiency in project execution. <br>
                    ❖ Professional Team <br>
                    We have a team of experts and professionals with experience in infrastructure and land mapping. We ensure that our clients get the best service from our team. <br>
                    ❖ Service Quality <br>
                    We always ensure the quality of the services we provide are in accordance with high quality standards and meet customer needs.</p>
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