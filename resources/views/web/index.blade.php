<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TheFalcon</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('web/assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('web/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('web/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/vendor/bootstrap-icons/bootstrap-icons') }}.css" rel="stylesheet">
    <link href="{{ asset('web/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('web/assets/css/style.css') }}" rel="stylesheet">
    <style>
        .banner img {
            width: 75px;
            height: 75px;
            margin-right: 10px;
            margin-bottom: 20px;
        }

        .ser-txt {
            padding-left: 0;
            padding-top: 0;
            margin-bottom: 25px;
        }
    </style>

    <!-- =======================================================
  * Template Name: BizLand
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

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
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="{{ route('index') }}"><img src="{{ asset('web/assets/img/logo.png') }}" style="max-height: 50px"
                    alt=""><span class="fs-3"
                    style="font-family: Georgia, serif; margin-top:20px;">TheFalcon</span></a>
            <!--<h1 class="logo"><a href="{{ route('index') }}"><img src="{{ asset('web/assets/img/logo.png') }}" alt=""><span>TheFalcon</span></a></h1>-->
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="{{ route('index') }}">Home</a></li>
                    <li><a class="nav-link scrollto active" href="{{ route('about') }}">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    {{-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> --}}
                    {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}

                    <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('web/assets/img/banner/sl1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('web/assets/img/banner/sl2.jpg') }}" class= "d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('web/assets/img/banner/sl3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        {{-- <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Featured Services Section --> --}}

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                {{-- <div class="section-title">
                    <h2>About</h2>
                    <h3>Find Out More <span>About Us</span></h3>
                    <p>At TheFalcon, we take pride in being a leading force in the construction, earth moving, and
                        building material industry.</p>
                </div> --}}

                <div class="row">
                    <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                        {{-- <div class="card"> --}}
                        <img src="{{ asset('web/assets/img/aboutus.jpg') }}" class="card-img-top" alt="..."
                            style="border-radius: 20px;">
                        {{-- </div> --}}
                        {{-- <img src="{{ asset('web/assets/img/about.jpg') }}" class="img-fluid"
                            style="height:500px; width:700px"> --}}
                    </div>
                    <div class="col-lg-7 justify-content-center" data-aos="fade-up" data-aos-delay="100">

                        <h2 style="color: #106eea">About us</h2>


                        <p style="font-size: 18px">
                            As a leading bricks and tiles manufacturing company, we take pride in delivering
                            high-quality, durable, and aesthetically pleasing solutions for your construction and design
                            needs.

                            We are your trusted partner in manufacturing top-of-the-line Cement Bricks, Paver Blocks ,
                            Concrete Floor Tiles, Concrete Garden Benches, RCC Fence Poles etc. As pioneers in
                            sustainable building solutions, we bring you cement bricks that redefine construction
                            standards in terms of strength, efficiency, and environmental impact.


                        </p>

                        <a href="{{ route('about') }}" class="btn btn-primary">Read More</a>
                        {{-- <h4>Our Vision</h4>
                        <p>
                            Empowering Progress, Building Dreams. Our vision is to be the preferred partner for
                            construction solutions, setting benchmarks for quality, sustainability, and innovation in
                            every project we undertake.
                        </p> --}}
                        {{-- Our Commitment
                        Quality Assurance: We adhere to the highest standards of quality control to deliver projects
                        that stand the test of time.
                        Safety First: The safety of our team, clients, and the community is non-negotiable. We implement
                        rigorous safety protocols on every project.
                        Environmental Stewardship: Recognizing our responsibility to the environment, we integrate
                        sustainable practices into our projects to minimize our ecological footprint. --}}

                        {{-- <ul>
                            <li>
                                <i class="bx bx-store-alt"></i>
                                <div>
                                    <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-images"></i>
                                <div>
                                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna
                                        pasata redi</p>
                                </div>
                            </li>
                        </ul> --}}
                        {{-- <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p> --}}
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ACC Blocks Section-->
        {{-- 
        <section id="service" class="banner"
            style="background-image:url('{{ asset('web/assets/img/services/b3.jpg') }}'); 
        background-size: 100%; color: white;
        background-size: cover; height: 100vh; ">
            <div class="container" data-aos="fade-up">

                <div class="text-center">

                    <h1 class="h1">Why use our Cement Bricks</h1>
                    <p>Our AAC Blocks are certified green building materials which can be drilled, cut, nailed, furrow
                        and milled as per clients requirements. We offer Tailor-made construction solutions as per our
                        client’s requirement. Magna’s AAC Blocks are the favourite building material for the
                        Construction Industry.</p>
                    <br>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ asset('web/assets/img/banner/b1.webp') }}" title="Cost Saving"
                            class="img-auto-width img-auto-height" width="90" height="90">

                        <span class="fs-6">Cost Saving</span>

                    </div>
                    <div class="col-sm-4">
                        <img src="{{ asset('web/assets/img/banner/b2.webp') }}" alt="Fire &amp; Acoustics Resistant"
                            class="img-auto-width img-auto-height" width="90" height="90">

                        <span class="fs-6">Fire &amp; Acoustics Resistant</span>

                    </div>
                    <div class="col-sm-8"></div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ asset('web/assets/img/banner/b3.webp') }}" title="Cost Saving"
                            class="img-auto-width img-auto-height" width="90" height="90">

                        <span class="fs-6">Time Saving</span>

                    </div>
                    <div class="col-sm-4">
                        <img src="{{ asset('web/assets/img/banner/b4.webp') }}" alt="Fire &amp; Acoustics Resistant"
                            class="img-auto-width img-auto-height" width="90" height="90">

                        <span class="fs-6">Earthquake Resistant</span>

                    </div>
                    <div class="col-sm-8"></div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ asset('web/assets/img/banner/b5.webp') }}" title="Cost Saving"
                            class="img-auto-width img-auto-height" width="90" height="90">

                        <span class="fs-6">Uniform in Size</span>

                    </div>
                    <div class="col-sm-4">
                        <img src="{{ asset('web/assets/img/banner/b6.webp') }}" alt="Fire &amp; Acoustics Resistant"
                            class="img-auto-width img-auto-height" width="90" height="90">

                        <span class="fs-6">Less Breakage</span>

                    </div>
                    <div class="col-sm-8"></div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ asset('web/assets/img/banner/b7.webp') }}" title="Cost Saving"
                            class="img-auto-width img-auto-height" width="90" height="90">

                        <span class="fs-6">Pest Resistant</span>

                    </div>
                    <div class="col-sm-4">
                        <img src="{{ asset('web/assets/img/banner/b8.webp') }}" alt="Fire &amp; Acoustics Resistant"
                            class="img-auto-width img-auto-height" width="90" height="90">

                        <span class="fs-6">Enhances the Carpet Area</span>

                    </div>
                    <div class="col-sm-8"></div>
                </div>


            </div>

        </section> --}}
        <section id="service" class="banner"
            style="background-image:url('{{ asset('web/assets/img/services/bricks.jpg') }}'); background-size: 100%; color: white;
        background-size: cover; height: 100vh; ">
            <div class="container" data-aos="fade-up">

                <div class="text-center">

                    <h1 class="h1">Why use Our Cement Bricks</h1>
                    <p>Cement Bricks are an excellent choice for construction across various environments and
                        applications.Our cement bricks are durable, sustainable and low- maintenance. In fact, they are
                        resistant to pests, molds, fire and moisture.Our client's can use cement bricks for constructing
                        garden structures and homes. </p>
                    <br>
                </div>

                <div class="row">
                    <div class="col-sm-8">


                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('web/assets/img/banner/b1.webp') }}" title="Cost Saving"
                                    class="img-auto-width img-auto-height" width="90" height="90">

                                <span class="fs-6">Cost Saving</span>

                            </div>
                            <div class="col-sm-5">
                                <img src="{{ asset('web/assets/img/banner/b2.webp') }}"
                                    alt="Fire &amp; Acoustics Resistant" class="img-auto-width img-auto-height"
                                    width="90" height="90">

                                <span class="fs-6">Fire &amp; Acoustics Resistant</span>

                            </div>
                            <div class="col-sm-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('web/assets/img/banner/b3.webp') }}" title="Cost Saving"
                                    class="img-auto-width img-auto-height" width="90" height="90">

                                <span class="fs-6">Time Saving</span>

                            </div>
                            <div class="col-sm-5">
                                <img src="{{ asset('web/assets/img/banner/b4.webp') }}"
                                    alt="Fire &amp; Acoustics Resistant" class="img-auto-width img-auto-height"
                                    width="90" height="90">

                                <span class="fs-6">Earthquake Resistant</span>

                            </div>
                            <div class="col-sm-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('web/assets/img/banner/b5.webp') }}" title="Cost Saving"
                                    class="img-auto-width img-auto-height" width="90" height="90">

                                <span class="fs-6">Uniform in Size</span>

                            </div>
                            <div class="col-sm-5">
                                <img src="{{ asset('web/assets/img/banner/b6.webp') }}"
                                    alt="Fire &amp; Acoustics Resistant" class="img-auto-width img-auto-height"
                                    width="90" height="90">

                                <span class="fs-6">Less Breakage</span>

                            </div>
                            <div class="col-sm-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('web/assets/img/banner/b7.webp') }}" title="Cost Saving"
                                    class="img-auto-width img-auto-height" width="90" height="90">

                                <span class="fs-6">Pest Resistant</span>

                            </div>
                            <div class="col-sm-5">
                                <img src="{{ asset('web/assets/img/banner/b8.webp') }}"
                                    alt="Fire &amp; Acoustics Resistant" class="img-auto-width img-auto-height"
                                    width="90" height="90">

                                <span class="fs-6">Enhances the Carpet Area</span>

                            </div>
                            <div class="col-sm-3">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">


                    </div>

                </div>
            </div>


            </div>



        </section><!-- End Featured Services Section -->


        <!-- End   ACC Blocks Section-->


        <!-- ======= Services Section ======= -->

        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <h3>Check our <span>Services</span></h3>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas
                        atque vitae autem.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card" style="width: 18rem;" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('web/assets/img/services/s1.jpg') }}" class="card-img-top"
                                style="height:200px;" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Bricks and Tiles Manufacturer</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card" style="width: 18rem;" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('web/assets/img/services/s2.jpg') }}" class="card-img-top"
                                style="height:200px;" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Building Construction</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card" style="width: 18rem;" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{ asset('web/assets/img/services/s3.jpg') }}" class="card-img-top"
                                style="height:200px;" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Construction Material</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card" style="width: 18rem;" data-aos="fade-up" data-aos-delay="400">
                            <img src="{{ asset('web/assets/img/services/s4.jpg') }}" class="card-img-top"
                                style="height:200px;" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Earth mover and Transport</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    {{-- </div>
      
                  </div> --}}
        </section><!-- End Featured Services Section -->



        </div>
        </section><!-- End Services Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container" data-aos="zoom-in">

                <div class="section-title">
                    {{-- <h2>Clients</h2> --}}
                    <h3><span>Clients</span></h3>
                    {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas
                  atque vitae autem.</p> --}}
                </div>

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('web/assets/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('web/assets/img/clients/client-2.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('web/assets/img/clients/client-3.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('web/assets/img/clients/client-4.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('web/assets/img/clients/client-5.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('web/assets/img/clients/client-6.png') }}" class="img-fluid"
                            alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials mt-5">
            <div class="container" data-aos="zoom-in">
                <div class="section-title">
                    <h3><span>Testimonials</span></h3>

                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('web/assets/img/testimonials/testimonials-1.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('web/assets/img/testimonials/testimonials-2.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('web/assets/img/testimonials/testimonials-3.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('web/assets/img/testimonials/testimonials-4.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('web/assets/img/testimonials/testimonials-5.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->



        <section id="clients" class="clients mt-5" style="padding: 40px 0;
        background: #8d608a;">
            <div class="container aos-init aos-animate" data-aos="zoom-in">

                <div class="row">

                    <div class="col-lg-8 col-md-4 col-6 d-flex">
                        <div class="quotes-d" style="color: white;">
                            <h2 class="fs-3">Have an enquiry? Feel free to contact us!</h2>
                            <p class="fs-6">TheFalcon Green Building Products is a company formed by young set of
                                promoters </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <div class="q-btn">
                            <a href="{{ route('contact') }}"
                                style="background: #9bc93e !important;
                                
                                font-family: Montserrat,sans-serif;
                                font-size: 20px;
                                color: #000 !important;
                                font-weight: 600;
                                transition: 0.4s ease;
                                border-radius: 0;
                                padding: 10px 29px;">Send
                                Enquiry
                            </a>
                        </div>
                    </div>


                </div>

            </div>
        </section>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        {{-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> --}}

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>TheFalcon<span>.</span></h3>
                        <p>
                            TheFalcon <br>
                            VPO Oel, Teh Ghanari<br>
                            Disst Una, Himachal Pradesh <br>
                            Pin 177206<br><br>
                            <strong>Phone:</strong> +91 98162 24258<br>
                            <strong>Email:</strong> info@thefalcon.in<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
                            <center> <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            </center>
                            {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>TheFalcon</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
                Designed by <a href="https://thedatavue.com/">TheDataVue Technologies</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('web/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('web/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('web/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('web/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('web/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('web/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('web/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('web/assets/js/main.js') }}"></script>

</body>

</html>
