@extends('layout')

@section('page_title')
    International Pro Systems
@endsection

@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <!-- <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> -->

            <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="container position-relative">

                    <div class="carousel-item active">
                        <div class="carousel-container">
                            <h2>Welcome to International Pro Systems</h2>
                            <p>Conference & Meeting Rooms Solutions<br>
                                LED Screens Solutions</p>
                            <a href="#about" class="btn-get-started">Read More</a>
                        </div>
                    </div><!-- End Carousel Item -->

                    <div class="carousel-item">
                        <div class="carousel-container">
                            <h2>IP SOUND</h2>
                            <p>Since the beginning IP Sound P.A & PRO Systems has always established excellent relationships
                                with our valued customers and conducted business with integrity and mutual understanding, by
                                offering expert sales support, high performance equipment, devoted after-sale customer
                                service, and fast on-time delivery.</p>
                            <a href="https://www.ipsound.com/" class="btn-get-started">Read More</a>
                        </div>
                    </div><!-- End Carousel Item -->

                    <div class="carousel-item">
                        <div class="carousel-container">
                            <h2>IP SCREEN</h2>
                            <p>IP SCREEN is a professional LED Screen manufacturer and Custom-Built LED Screen Solutions for
                                our customers.<br>
                                We have full range collections of Rental LED Display ,Fixed LED Display,Transparent LED
                                Display and Small Pitch LED Display.</p>
                            <a href="https://ip-screens.com/" class="btn-get-started">Read More</a>
                        </div>
                    </div><!-- End Carousel Item -->

                    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                    </a>

                    <ol class="carousel-indicators"></ol>

                </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>PA SYSTEMS AND CENTRAL EVACUATION SYSTEMS</h3>
                            </a>
                            <p>Our company has come a long way in the public Address
                                and evacuation systems in terms development of
                                technology and the level of implemented projects such
                                as hospitals, schools, Mosques universities, government
                                institutions ,United Nations...etc.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <div class="icon">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>PROFESSIONAL SOUND SYSTEMS</h3>
                            </a>
                            <p>Professional sound systems are designed to deliver high-quality audio performance in various
                                settings, including concerts, conferences, and public spaces. These systems ensure clear,
                                powerful, and balanced sound, catering to the needs of large audiences.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <div class="icon">
                                <i class="bi bi-easel"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>LED SCREENS & VISUAL SYSTEMS</h3>
                            </a>
                            <p>LED screens and visual systems are used to display vivid, high-resolution images and videos
                                in various environments such as events, advertising, and entertainment venues. They offer
                                exceptional brightness, color accuracy, and flexibility in display sizes.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item item-red position-relative">
                            <div class="icon">
                                <i class="bi bi-bounding-box-circles"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>INTELLIGENT LIGHT SYSTEMS</h3>
                            </a>
                            <p>Intelligent light systems integrate advanced technology to provide dynamic lighting
                                solutions. These systems are used in stage productions, architectural lighting, and smart
                                homes, offering programmable features, energy efficiency, and adaptability to different
                                environments.
                            </p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->
                </div>

            </div>

        </section><!-- /Featured Services Section -->

        <!-- About Section -->
        <section id="about" class="about section light-background">

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Company Profile :</h3>
                        <p class="fst-italic">
                            Since 2006 We are been establishment
                            with local experiences and international
                            support by products and study for all our
                            projects from important companies in all
                            of our lines of busines.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Digital Sound Mixers</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Analog Sound Mixers</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Rack Mixers</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Equalizers ,Players</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Digital Sound Processors</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Cinema Audio Solutions, Surround system, Dolby sys,
                                    …etc.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Studio recording equipment's.</span></li>
                        </ul>
                        <p>
                            Our work take off in IPS by studying and support all our projects, which are concerned with low
                            current systems specially in Audio solutions.
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Features</h2>
                {{-- <p>PUBLIC ADDRESS SYSTEMS AND CENTRAL EVACUATION SYSTEMS</p> --}}
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <div class="flex-wrap">
                            <img src="assets/img/services-5.webp" class="img-fluid mb-3" alt="">
                            <img src="assets/img/services-6.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                        <h3>PUBLIC ADDRESS SYSTEMS AND CENTRAL EVACUATION SYSTEMS.</h3>
                        <p class="fst-italic">
                            Our company has come a long way in the public Address
                            and evacuation systems in terms development of
                            technology and the level of implemented projects such
                            as hospitals, schools, Mosques universities, government
                            institutions ,United Nations...etc.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i><span>Digital & IP public address systems.</span></li>
                            <li><i class="bi bi-check"></i> <span>Digital & IP Evacuation systems.</span></li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="200">
                        <div class="flex-wrap">
                            <img src="assets/img/services-7.jpg" class="img-fluid mb-3" alt="">
                            <img src="assets/img/services-8.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>LIGHT SYSTEMS</h3>
                        {{-- <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p> --}}
                        <ul>
                            <li><i class="bi bi-check"></i><span>DMX controllers</span></li>
                            {{-- <li><i class="bi bi-check"></i><span>Dimmers.</span></li> --}}
                            <li><i class="bi bi-check"></i><span>Lazer Led & Bar Led</span></li>
                            <li><i class="bi bi-check"></i><span>Fog machines</span></li>
                            <li><i class="bi bi-check"></i><span>Moving Heads</span></li>
                            {{-- <li><i class="bi bi-check"></i><span>Dancing floors</span></li> --}}
                            <li><i class="bi bi-check"></i><span>LED Beams</span></li>
                            {{-- <li><i class="bi bi-check"></i><span>Led effect screens</span></li> --}}
                            {{-- <li><i class="bi bi-check"></i><span>Spot effects</span></li> --}}
                            {{-- <li><i class="bi bi-check"></i><span>Power control motors</span></li> --}}
                            <li><i class="bi bi-check"></i><span>Lighting Bridge</span></li>
                            {{-- <li><i class="bi bi-check"></i><span>All lighting accessories</span></li> --}}
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                        <div class="flex-wrap">
                            <img src="assets/img/services-9.jpg" class="img-fluid mb-3" alt="">
                            <img src="assets/img/services-10.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-7" data-aos="fade-up">
                        <h3>CCTV SURVEILLANCE SYSTEMS</h3>
                        {{-- <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit
                            aut quia voluptatem hic voluptas dolor doloremque.</p> --}}
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Analog HD systems</span></li>
                            <li><i class="bi bi-check"></i> <span>IP Networking Systems</span></li>
                            <li><i class="bi bi-check"></i> <span>Wireless Networking Systems</span></li>
                            <li><i class="bi bi-check"></i> <span>Storage networking soulutions</span></li>
                            <li><i class="bi bi-check"></i> <span>Remote Controlling Softwires by PCs, Android
                                    ,Ipads,….</span></li>
                            {{-- <li><i class="bi bi-check"></i> <span>HD cameras</span></li> --}}
                            {{-- <li><i class="bi bi-check"></i> <span>IP cameras </span></li> --}}
                            {{-- <li><i class="bi bi-check"></i> <span>ANPR cameras</span></li> --}}
                            {{-- <li><i class="bi bi-check"></i> <span>Heat Cameras</span></li> --}}
                            {{-- <li><i class="bi bi-check"></i> <span>Wi-Fi cameras</span></li> --}}
                            {{-- <li><i class="bi bi-check"></i> <span>PTZ Cameras</span></li> --}}
                            {{-- <li><i class="bi bi-check"></i> <span>DVRs & NVRs</span></li> --}}
                            {{-- <li><i class="bi bi-check"></i> <span>Storage solutions</span></li> --}}
                            {{-- <li><i class="bi bi-check"></i> <span>Wall Monitoring</span></li> --}}
                            {{-- <li><i class="bi bi-check"></i> <span>Monitoring control rooms </span></li>
                            equipment’s</span></li> --}}
                            {{-- <li><i class="bi bi-check"></i> <span>Remote control monitoring softwire</span></li> --}}
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                        <img src="assets/img/services-11.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                        <h3>CONFERENCE & INTERPRETATION CONTROL SYSTEMS</h3>
                        <p class="fst-italic">
                            We are the agent of the most Famoso company of the world of
                            conference systems Restmoment
                        </p>
                        <p>
                            We supply :

                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Weird conference systems</span></li>
                            <li><i class="bi bi-check"></i> <span>Wireless conference systems</span></li>
                            <li><i class="bi bi-check"></i> <span>Tracing video</span></li>
                            <li><i class="bi bi-check"></i> <span>Video and audio connectivity </span></li>
                            <li><i class="bi bi-check"></i> <span>Interpreter controlling systems</span></li>
                            <li><i class="bi bi-check"></i> <span>Equipped all Meeting and lecture hall</span></li>
                            <li><i class="bi bi-check"></i> <span>International meeting rooms and broadcasting meetings
                                    via the Internet</span></li>
                            </span></li>
                        </ul>

                    </div>
                </div><!-- Features Item -->

            </div>

        </section><!-- /Features Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section" style="background: linear-gradient(9deg, gray, transparent);">

            <div class="container">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-9.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-10.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-11.webp" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-12.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-13.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-14.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-15.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-16.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-17.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-18.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-19.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-20.png" class="img-fluid"
                                alt=""></div>
                    </div>
                </div>

            </div>

        </section><!-- /Clients Section -->


    </main>
@endsection
