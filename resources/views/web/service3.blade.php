@extends('web.layouts.app')

@section('styles')
@endsection

@section('content')
    <main id="main">


        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3 style="color:#106eea;">Construction Material Suppliers</span></h3>
                </div>

                <div class="row">
                    <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('web/assets/img/services/sb10.jpg') }}" class="card-img-top" alt="..."
                            style="border-radius: 20px; height:300px;">
                    </div>
                    <div class="col-lg-7 justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <div style="margin-top:4rem;">
                            <h4>Your Trusted Partner in Construction Materials</h4>
                            <p>
                                At The Falcon, where quality meets innovation in the world of construction materials. As a
                                leading provider in the industry, we take pride in offering a diverse range of high-quality
                                products that cater to your construction needs.


                            </p>
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- End About Section -->

        <section id="services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3><span>Our Products</span></h3>
                </div>

                <div class="row content">

                    <div data-aos="fade-up" class="col-lg-6 pt-4 pt-lg-0 p-5 mt-5">
                        <h4 style="font-weight:bold;">Building Blocks and Bricks</h4>
                        <p>
                            From the foundation to the finishing touches, our selection of building blocks and bricks
                            ensures durability and structural integrity for every project.
                        </p>
                    </div>
                    <div data-aos="fade-up" class="col-lg-6">
                        <img src="{{ asset('web/assets/img/services/sb11.jpg') }}" style="height:200px; width:480px">
                    </div>


                </div>


                <div class="row content mt-5">

                    <div data-aos="fade-up" class="col-lg-6 pt-4 pt-lg-0 p-5 mt-5">
                        <h4 style="font-weight:bold;">Sand and Aggregates</h4>
                        <p>
                            Discover a superior range of Double washed and aggregates designed to meet the highest
                            construction standards. Our materials form the backbone of robust structures.
                        </p>
                    </div>
                    <div data-aos="fade-up" class="col-lg-6">
                        <img src="{{ asset('web/assets/img/services/sb12.jpg') }}" style="height:200px; width:480px">
                    </div>


                </div>

                <div class="row content mt-5">

                    <div data-aos="fade-up" class="col-lg-6 pt-4 pt-lg-0 p-5 mt-5">
                        <h4 style="font-weight:bold;">Flooring Solutions</h4>
                        <p>
                            Enhance the aesthetics of your space with our diverse flooring solutions. Choose from a range of
                            materials that combine style with functionality.
                        </p>
                    </div>
                    <div data-aos="fade-up" class="col-lg-6">
                        <img src="{{ asset('web/assets/img/services/sb13.jpg') }}" style="height:200px; width:480px">
                    </div>


                </div>
            </div>



            {{-- </div>

          </div> --}}
        </section>


    </main>
@endsection

@section('scripts')
@endsection
