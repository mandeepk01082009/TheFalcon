@extends('web.layouts.app')

@section('styles')
@endsection

@section('content')
    <main id="main">


        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3 style="color:#106eea;">Earth mover and Transport</span></h3>
                </div>

                <div class="row">
                    <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('web/assets/img/services/sb14.jpg') }}" class="card-img-top" alt="..."
                            style="border-radius: 20px; height:300px;">
                    </div>
                    <div class="col-lg-7 justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <div style="margin-top:4rem;">
                            <h4>Earth Moving and Transport Solutions You Can Trust</h4>
                            <p>
                                The Falcon, your partner in earth-moving and transportation excellence. With a commitment to
                                efficiency, safety, and precision, we deliver comprehensive solutions for your construction
                                and logistical needs.

                            </p>
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- End About Section -->

        <section id="services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3><span>Our Services</span></h3>
                </div>

                <div class="row content">

                    <div data-aos="fade-up" class="col-lg-6 pt-4 pt-lg-0 p-5 mt-5">
                        <h4 style="font-weight:bold;">Earth Moving</h4>
                        <p>
                            Transforming landscapes with power and precision, our fleet of earth movers is equipped to
                            handle projects of all sizes. From excavation to grading, we specialize in reshaping the ground
                            for your construction goals.
                        </p>
                    </div>
                    <div data-aos="fade-up" class="col-lg-6">
                        <img src="{{ asset('web/assets/img/services/sb15.jpg') }}" style="height:200px; width:480px">
                    </div>


                </div>


                <div class="row content mt-5">

                    <div data-aos="fade-up" class="col-lg-6 pt-4 pt-lg-0 p-5 mt-5">
                        <h4 style="font-weight:bold;">Material Transport</h4>
                        <p>
                            Efficiently move materials from point A to B with our dedicated material transport services. Our
                            fleet is capable of handling various materials, ensuring timely and safe delivery to your
                            construction sites.
                        </p>
                    </div>
                    <div data-aos="fade-up" class="col-lg-6">
                        <img src="{{ asset('web/assets/img/services/sb16.jpg') }}" style="height:200px; width:480px">
                    </div>


                </div>

                <div class="row content mt-5">

                    <div data-aos="fade-up" class="col-lg-6 pt-4 pt-lg-0 p-5 mt-5">
                        <h4 style="font-weight:bold;">Site Preparation</h4>
                        <p>
                            Preparing your construction site for success is our expertise. Our team works to clear, level,
                            and set the stage for your project, ensuring a solid foundation for every endeavour.
                        </p>
                    </div>
                    <div data-aos="fade-up" class="col-lg-6">
                        <img src="{{ asset('web/assets/img/services/sb17.jpg') }}" style="height:200px; width:480px">
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
