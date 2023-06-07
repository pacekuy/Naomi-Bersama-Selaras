@extends('frontend.layouts.main')

@section('portfolio-active', 'active')

@section('content')

<div class="full-title">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Portfolio</h1>
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">Projects</li>
            </ol>
        </div>
    </div>
</div>

<div class="portfolio-col">
    <div class="container">

        
        <div class="container">
            <!-- Team Members -->
            <div class="team-members-box">
                <h2>Our Portfolio</h2>
                <br><br><br>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100 text-center">
                            <div class="our-team">
                                <img class="img-fluid" src="{{ asset('frontend/images/portfolio/hotel.jpg')}}" alt="" />
                                <div class="team-content">
                                    <h3 class="title">Angke - Uprating HV Conductor</h3>
                                    <span class="post">Others Project</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100 text-center">
                            <div class="our-team">
                                <img class="img-fluid" src="{{ asset('frontend/images/portfolio/kantor.jpg')}}" alt="" />
                                <div class="team-content">
                                    <h3 class="title">Instalasi HV Equipment</h3>
                                    <span class="post">Installation Sungai Rumbai Project</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100 text-center">
                            <div class="our-team">
                                <img class="img-fluid" src="{{ asset('frontend/images/portfolio/faskes.jpg')}}" alt="" />
                                <div class="team-content">
                                    <h3 class="title">Instalasi GIL 500kV PLTGU</h3>
                                    <span class="post">Installation Tanjung Priok Project</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ----------------------------------------------------- 2 -------------------------------------------------------- -->
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100 text-center">
                            <div class="our-team">
                                <img class="img-fluid" src="{{ asset('frontend/images/portfolio/grapari.jpg')}}" alt="" />
                                <div class="team-content">
                                    <h3 class="title">Persiapan Erection GITET 275 & 150kV</h3>
                                    <span class="post">Installation Sungai Rumbai Project</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100 text-center">
                            <div class="our-team">
                                <img class="img-fluid" src="{{ asset('frontend/images/portfolio/mesjid.jpg')}}" alt="" />
                                <div class="team-content">
                                    <h3 class="title">Plumpang - Instalasi Line Dropper GIS 150kV</h3>
                                    <span class="post">Other Project</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100 text-center">
                            <div class="our-team">
                                <img class="img-fluid" src="{{ asset('frontend/images/portfolio/rumah.jpg')}}" alt="" />
                                <div class="team-content">
                                    <h3 class="title">Pulo Gadung - Erection Gantry GIS diatas Roof Top</h3>
                                    <span class="post">Other Project</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- ----------------------------------------------------- 3 -------------------------------------------------------- -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{ asset('frontend/images/portfolio/jembatan.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Dago - Instalasi Grounding GIS</h3>
                            <span class="post">Other Project</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{ asset('frontend/images/portfolio/banking.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Suvarna - Instalasi LV Cable Panel Proteksi GIS 150kV</h3>
                            <span class="post">Other Project</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{ asset('frontend/images/portfolio/tower.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Sinar Sahabat - Erection GI 150kV</h3>
                            <span class="post">Other Project</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>



<div class="pagination_bar">
    <!-- Pagination -->
    <!--<ul class="pagination justify-content-center">
					<li class="page-item">
					  <a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					  </a>
					</li>
					<li class="page-item">
					  <a class="page-link" href="#">1</a>
					</li>
					<li class="page-item">
					  <a class="page-link" href="#">2</a>
					</li>
					<li class="page-item">
					  <a class="page-link" href="#">3</a>
					</li>
					<li class="page-item">
					  <a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					  </a>
					</li>
				</ul>-->
</div>

</div>
<!-- /.container -->
</div>

<!-- Contact Us -->
<<div class="touch-line">

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