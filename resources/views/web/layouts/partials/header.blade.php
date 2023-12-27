 <!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a
                    href="mailto:info@thefalcon.in">info@thefalcon.in</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91 98162 24258</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> --}}
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            {{-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> --}}
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{ route('index') }}"><img src="{{ asset('web/assets/img/logo.png') }}" style="max-height: 50px"
                alt=""><span class="fs-3"
                style="font-family: Georgia, serif; margin-top:20px;">TheFalcon</span></a>
        <!--<h1 class="logo"><a href="{{ route('index') }}"><img src="{{ asset('web/assets/img/logo.png') }}" alt=""><span>TheFalcon</span></a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

        <nav id="navbar" class="navbar" style="padding: 30px;">
            <ul>
                <li><a class="nav-link scrollto {{ request()->is('/') ? 'active' : '' }}" href="{{ route('index') }}">Home</a></li>
                <li><a class="nav-link scrollto {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                {{-- <li><a class="nav-link scrollto" href="#services">Services</a></li> --}}
                <li class="dropdown"><a class="{{ request()->is('service1') ? 'active' : '' }} && {{ request()->is('service2') ? 'active' : '' }} && {{ request()->is('service3') ? 'active' : '' }} && {{ request()->is('service4') ? 'active' : '' }}" href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="{{ request()->is('service1') ? 'active' : '' }}" href="{{ route('service1') }}">Cement Bricks and Tiles Manufacturer </a></li>
                        {{-- <li class="dropdown"><a href="{{ route('service1') }}"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ route('service1') }}">Deep Drop Down 1</a></li>
                                <li><a href="{{ route('service1') }}">Deep Drop Down 2</a></li>
                                <li><a href="{{ route('service1') }}">Deep Drop Down 3</a></li>
                                <li><a href="{{ route('service1') }}">Deep Drop Down 4</a></li>
                                <li><a href="{{ route('service1') }}">Deep Drop Down 5</a></li>
                            </ul>
                        </li> --}}
                        <li><a class="{{ request()->is('service2') ? 'active' : '' }}" href="{{ route('service2') }}">Building and Road Construction</a></li>
                        <li><a class="{{ request()->is('service3') ? 'active' : '' }}" href="{{ route('service3') }}">Construction Material Suppliers</a></li>
                        <li><a class="{{ request()->is('service4') ? 'active' : '' }}" href="{{ route('service4') }}">Earth mover and Transport</a></li>
                    </ul>
                </li>
                {{-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> --}}
                {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}

                <li><a class="nav-link scrollto {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->


    </div>
</header><!-- End Header -->
