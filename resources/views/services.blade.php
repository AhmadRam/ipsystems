@extends('layout')

@section('page_title')
    Services
@endsection

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>Services</h1>
                {{-- <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam
                    molestias.</p> --}}
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Services</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

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

        <!-- Services Section -->
        <section id="services" class="services section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="img">
                                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details">
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Nesciunt Mete</h3>
                                </a>
                                <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores
                                    iure perferendis.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="img">
                                <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details">
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Eosle Commodi</h3>
                                </a>
                                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum
                                    hic non ut nesciunt dolorem.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="img">
                                <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details">
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Ledo Markt</h3>
                                </a>
                                <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id
                                    voluptas adipisci eos earum corrupti.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="img">
                                <img src="assets/img/services-4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details">
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Asperiores Commodit</h3>
                                </a>
                                <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga
                                    sit provident adipisci neque.</p>
                                <a href="service-details.html" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

    </main>
@endsection
