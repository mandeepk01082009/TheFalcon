@extends('web.layouts.app')

@section('styles')
@endsection

@section('content')
    <main id="main">


        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3 style="color:#106eea;">Building and Road Construction</span></h3>
                </div>

                <div class="row">
                    <div data-aos="fade-up" class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('web/assets/img/services/sb5.jpg') }}" class="card-img-top" alt="..."
                            style="border-radius: 20px; height:300px;">
                    </div>
                    <div data-aos="fade-up" class="col-lg-7 justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <p style="margin-top:6rem">
                            At The Falcon, we believe in turning dreams into concrete realities. With a commitment to
                            quality, innovation, and customer satisfaction, we stand as a beacon in the construction
                            industry. Whether you're envisioning a residential haven, a commercial space, or an
                            industrial complex, we have the expertise to bring your vision to life.


                        </p>

                    </div>
                </div>

            </div>

        </section><!-- End About Section -->

        <section id="services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3><span>Our Expertise</span></h3>
                </div>

                <div class="row content">

                    <div data-aos="fade-up" class="col-lg-6 pt-4 pt-lg-0 p-5 mt-5">
                        <h4 style="font-weight:bold;">Residential Construction</h4>
                        <p>
                            Designing and building homes that resonate with your lifestyle. From cozy family abodes to
                            luxurious estates, our residential construction services are tailored to meet your unique needs.
                        </p>
                    </div>
                    <div data-aos="fade-up" class="col-lg-6">
                        <img src="{{ asset('web/assets/img/services/sb6.jpg') }}" style="height:200px; width:480px">
                    </div>


                </div>


                <div class="row content mt-5">

                    <div data-aos="fade-up" class="col-lg-6 pt-4 pt-lg-0 p-5 mt-5">
                        <h4 style="font-weight:bold;">Commercial Construction</h4>
                        <p>
                            Transforming ideas into commercial spaces that inspire productivity. Our team excels in crafting
                            innovative
                            solutions for offices, retail establishments, and more.
                        </p>
                    </div>
                    <div data-aos="fade-up" class="col-lg-6">
                        <img src="{{ asset('web/assets/img/services/sb7.jpeg') }}"  style="height:200px; width:480px">
                    </div>


                </div>

                <div class="row content mt-5">

                    <div data-aos="fade-up" class="col-lg-6 pt-4 pt-lg-0 p-5 mt-5">
                        <h4 style="font-weight:bold;">Industrial Construction</h4>
                        <p>
                            Executing large-scale industrial projects with precision and efficiency. We understand the
                            unique challenges
                            of industrial construction and deliver solutions that stand the test of time.
                        </p>
                    </div>
                    <div data-aos="fade-up" class="col-lg-6">
                        <img src="{{ asset('web/assets/img/services/sb8.jpg') }}" style="height:200px; width:480px">
                    </div>


                </div>

                <div class="row content mt-5">

                    <div data-aos="fade-up" class="col-lg-6 pt-4 pt-lg-0 p-5 mt-5">
                        <h4 style="font-weight:bold;">Renovation and Remodelling</h4>
                        <p>
                            Breathing new life into existing spaces. Our renovation and remodeling services seamlessly blend
                            functionality with aesthetics, creating spaces that evolve with your needs.
                        </p>
                    </div>
                    <div data-aos="fade-up" class="col-lg-6">
                        <img src="{{ asset('web/assets/img/services/sb9.jpg') }}" style="height:200px; width:480px">
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
