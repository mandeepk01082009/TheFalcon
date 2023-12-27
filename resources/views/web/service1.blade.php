@extends('web.layouts.app')

@section('styles')
@endsection

@section('content')
    {{-- <section id="services" class="banner" style="background-image:url('{{ asset('web/assets/img/services/sb1.jpg') }}');   color: white;
background-size: cover; height: 500px; "> --}}

    {{-- <div class="container" data-aos="fade-up" style="margin-top: 14rem">

    <div class="row">
        <div class="col-lg-12">
            <img src="{{ asset('web/assets/img/services/sb1.jpg') }}" class="img-fluid" alt="..."
                    style="height:300px;">
        </div>
    </div> --}}

    {{-- <div class="text-center">

        <h1 class="h1">Cement Bricks and Tiles Manufacturer</h1>

    </div> --}}
    {{-- </div>

</section><!-- End Featured Services Section --> --}}
    <main id="main">


        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3 style="color:#106eea;">Cement Bricks and Tiles Manufacturer</span></h3>
                </div>

                <div class="row">
                    <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('web/assets/img/services/sb1.jpg') }}" class="card-img-top" alt="..."
                            style="border-radius: 20px; height:300px;">
                    </div>
                    <div class="col-lg-7 justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <p class="mt-5">
                            As a leading bricks and tiles manufacturing company, we take pride in delivering
                            high-quality, durable, and aesthetically pleasing solutions for your construction and design
                            needs.

                            We are your trusted partner in manufacturing top-of-the-line Cement Bricks, Paver Blocks ,
                            Concrete Floor Tiles, Concrete Garden Benches, RCC Fence Poles etc. As pioneers in
                            sustainable building solutions, we bring you cement bricks that redefine construction
                            standards in terms of strength, efficiency, and environmental impact.


                        </p>

                    </div>
                </div>

            </div>

        </section><!-- End About Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3><span> Our Cement Bricks</span></h3>
                </div>

                <div class="row">

                    <div class="col-lg-7 justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <p data-aos="fade-up">
                            <strong>1. Strength :</strong> Our cement bricks are stronger than other bricks under
                            compressive loads. The durability of concrete is very
                            high.
                        </p>
                        <p data-aos="fade-up">
                            <strong>2. Thermal Insulation :</strong> Say goodbye to temperature extremes with our cement
                            bricks' exceptional thermal insulation properties. Keep
                            your spaces comfortable and energy-efficient, reducing your carbon footprint and energy costs.

                        </p>
                        <p data-aos="fade-up">
                            <strong>3. Fire Resistance :</strong> Safety is paramount, and our cement bricks provide
                            unparalleled fire resistance. Protect your investments
                            and loved ones with a building material that prioritizes safety without compromising on
                            performance.
                        </p>
                        <p data-aos="fade-up">
                            <strong>4. Sound Insulation :</strong> Enjoy peace and tranquillity within your spaces. Our
                            cement bricks offer superior sound insulation, making
                            them an excellent choice for residential, commercial, and industrial applications.
                        </p>

                    </div>
                    <div class="col-lg-5" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('web/assets/img/services/sb2.jpg') }}" class="card-img-top" alt="..."
                            style="height:350px;">
                    </div>
                </div>

            </div>

        </section><!-- End About Section -->

        <section id="services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3><span>Why Choose The Falcon Cement Bricks?</span></h3>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card" style="width:36rem" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('web/assets/img/services/sb3.jpg') }}" class="card-img-top"
                                style="height:250px;" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Quality Assurance</h5>
                                <p class="card-text">We adhere to stringent quality control measures to ensure that our
                                    Cement bricks meet or exceed industry standards. Trust in the durability and reliability
                                    of our products for your construction projects.</p>
                                {{-- <a href="{{ route('service1') }}" class="btn btn-primary">Read More</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card" style="width:36rem" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('web/assets/img/services/sb4.jpg') }}" class="card-img-top"
                                style="height:250px;" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Environmentally Friendly</h5>
                                <p class="card-text">As part of our commitment to sustainability, our Cement bricks are
                                    manufactured with eco-friendly processes and materials. Build with a conscience, knowing
                                    that you are contributing to a greener and more sustainable future.</p>
                                {{-- <a href="{{ route('service2') }}" class="btn btn-primary">Read More</a> --}}
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
