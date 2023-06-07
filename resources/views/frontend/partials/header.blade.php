<!-- Top Bar -->

<div class="top-bar">

<div class="container">

    <div class="row">

        <div class="col-lg-6">

            <div class="social-media">

                <ul>

                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                </ul>

            </div>

        </div>

        <div class="col-lg-6">

            <div class="contact-details">

                <ul>

                    <li><i class="fas fa-phone"></i> Telp +62 21 80471028</li>

                    <li><i class="fas fa-map-marker-alt"></i> Bogor - Indonesia</li>

                </ul>

            </div>

        </div>

    </div>

</div>

</div>

<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">

<div class="container">

    <a class="navbar-brand" href="{{url('/')}}">

        <img style="width: 205px;" src="{{ asset('frontend/images/logo.jpg')}}" alt="logo" />

    </a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        <span class="fas fa-bars"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">

                <a class="nav-link @yield('home-active')" href="{{url('/')}}">Home</a>

            </li>

            <li class="nav-item dropdown">

                <a class="nav-link @yield('company-active')" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Company<i class="fas fa-sort-down"></i></a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">

                    <a class="dropdown-item" href="{{url('/about')}}">Company Profile</a>

                    <a class="dropdown-item" href="{{url('/profile')}}">Company Data</a>

                    <a class="dropdown-item" href="{{url('/certificates')}}">Certificates</a>

                    <!-- <a class="dropdown-item" href="{{url('/clients')}}">Partner</a>
                    
                    <a class="dropdown-item" href="{{url('/publication')}}">Publikasi</a> -->

            </li>

            

            <li class="nav-item">

                <a class="nav-link @yield('services-active')" href="{{url('services')}}">Services</a>

            </li>


            <li class="nav-item">

                <a class="nav-link @yield('portfolio-active')" href="{{url('projects')}}">Projects</a>

            </li>
            
            <!-- <li class="nav-item dropdown">

                <a class="nav-link @yield('portfolio-active')" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio <i class="fas fa-sort-down"></i></a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">

                    <a class="dropdown-item" href="{{url('projects')}}">Projects</a>

                    <a class="dropdown-item" href="{{url('projects-location')}}">Lokasi Project</a>

                </div>

            </li>  -->



            <li class="nav-item">

                <a class="nav-link @yield('contact-active')" href="{{url('contact')}}">Contact</a>

            </li>

            

            <!-- <li class="nav-item">

                <a class="nav-link @yield('news-active')" href="{{url('news')}}">News</a>

            </li> -->

            

        </ul>

    </div>

</div>

</nav>