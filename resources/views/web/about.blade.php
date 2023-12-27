@extends('web.layouts.app')

@section('styles')
    <style>
        .banner h1 {
            color: #FFFFFF;
            font-family: "Philosopher", Sans-serif;
            font-size: 55px;
            font-weight: bold;
            text-transform: capitalize;
        }

        <style>
    </style>
@endsection

@section('content')
    <section id="services" class="banner"
        style="background-image:url('{{ asset('web/assets/img/team/background.webp') }}');   color: white;
        background-size: cover; height: 500px; ">
        <div class="container" data-aos="fade-up">

            <div class="text-center mt-5">

                <h1 class="h1 mt-5">ABOUT US</h1>

            </div>
        </div>

    </section><!-- End Featured Services Section -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <h3 class="mt-5 mx-5">About TheFalcon</h3>
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="100">

                        <p>
                            As a leading bricks and tiles manufacturing company, we take pride in delivering high-quality,
                            durable, and aesthetically pleasing solutions for your construction and design needs.

                            We are your trusted partner in manufacturing top-of-the-line Cement Bricks, Paver Blocks ,
                            Concrete Floor Tiles, Concrete Garden Benches, RCC Fence Poles etc. As pioneers in sustainable
                            building solutions, we bring you cement bricks that redefine construction standards in terms of
                            strength, efficiency, and environmental impact.

                        </p>


                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= About Section ======= -->
        <section id="whyus" class="whyus">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('web/assets/img/team/aboutus.jpg') }}" class="img-fluid"
                            style="height:500px; width:700px">
                    </div>
                    <div class="col-lg-6 justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <div data-aos="fade-up">
                        <h3 class="mt-5" style="color: #106eea;">Why Choose us</h3>
                        <p>
                            <strong>Modern Fleet :</strong> Our fleet comprises state-of-the-art earth-moving equipment and
                            transport vehicles, maintained to the highest standards. You can trust us to deliver optimal
                            performance on every project.
                        </p>
                        </div>
                        <div data-aos="fade-up">
                        <p>
                            <strong>Experienced Operators :</strong> Our skilled and experienced operators bring a wealth of
                            knowledge to every job. They understand the intricacies of earth-moving and transportation,
                            ensuring your project is in capable hands.

                        </p>
                        </div>
                        <div data-aos="fade-up">
                        <p>
                            <strong>Safety First :</strong> Safety is at the core of everything we do. From equipment
                            maintenance to on-site practices, we prioritise the well-being of our team and the success of
                            your project.
                        </p>
                        </div>
                        <div data-aos="fade-up">
                        <p>
                            <strong>On-Time Delivery :</strong> Time is of the essence, and we understand the importance of
                            meeting deadlines. Our commitment to punctuality ensures that your project stays on schedule.
                        </p>
                        </div>
                        
                    </div>
                </div>


            </div>
        </section><!-- End About Section -->


    </main>
@endsection

@section('scripts')
@endsection
