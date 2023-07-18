<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Ceilo Official</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    <!-- Favicons -->
    <link href="{{ asset('assets/desain2/assets/img3/logo-rv.png') }}" rel="icon">        
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/desain2/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/desain2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/desain2/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/desain2/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/desain2/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/desain2/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/desain2/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/desain2/assets/css/whatsapp.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center
        justify-content-between">

            <a href="#" class="logo d-flex align-items-center">
                <img src="assets/images1/ceilologo.png" alt="Ceilo Logo">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#product">Product</a></li>
                    <li><a class="nav-link scrollto" href="#inspiration">Inspiration</a></li>
                    <li><a class="nav-link scrollto" href="#komentar">Kata Mereka</a></li>
                    <li><a class="nav-link scrollto" href="#client">Client</a></li>
                    <li><a class="getstarted scrollto" href="{{ route('contactku') }}">GET IN TOUCH</a></li>
                    {{-- <li><a class="getstarted scrollto getintouch" id="getintouch">GET IN TOUCH</a></li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row cooba">
                {{-- <div class="col-lg-6 d-flex flex-column justify-content-center"> --}}
                <div style="margin-top: 110px" class="col-lg-6 d-flex justify-content-center">
                    <h2 data-aos="fade-up" data-aos-delay="400" class="fw-bold text-dark"
                        style="text-align: justify; font-size: 30px;">Bunga Hias Artificial & Peralatan Rumah Tangga
                        Terbaik No.1 dengan Harga Terjangkau
                    </h2>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/desain2/assets/img/test2.png') }}" class="" alt="Pecel">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="features">

            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-6 ps-5 ">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="{{ asset('assets/desain2/assets/img3/image-flower.jpg') }}"
                                        class="img-fluid" style="border-radius: 20px;" width="500px" alt="">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ asset('assets/desain2/assets/img3/bunga.jpeg') }}" class="img-fluid"
                                        style="border-radius: 20px;" width="500px" alt="">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ asset('assets/desain2/assets/img3/cactus.jpg') }}" class="img-fluid"
                                        style="border-radius: 20px;" width="500px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">
                            <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                                <div class=" d-flex align-items-center">
                                    <h1 style="color: #6f3d94; font-weight: 900; font-size: 40px; ">About Us</h1>
                                </div>
                            </div>
                            <div class="col-md-12 pe-5" data-aos="zoom-out" data-aos-delay="200">
                                <div class="d-flex align-items-center">
                                    <p
                                        style="font-family: Arial, Helvetica, sans-serif; font-size: 20px; text-align: justify;">
                                        &nbsp;&nbsp;&nbsp;
                                        Ceilo hadir sebagai solusi untuk Anda yang ingin mempunyai bunga atau tanaman
                                        tanpa perlu
                                        perawatan extra dengan jaminan awet seumur hidup, harga ramah dikantong.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12 pe-5" data-aos="zoom-out" data-aos-delay="200">
                                <div class="d-flex align-items-center">
                                    <p
                                        style="font-family: Arial, Helvetica, sans-serif; font-size: 20px; text-align: justify;">
                                        &nbsp;&nbsp;
                                        Tidak hanya itu Ceilo juga mempunyai produk peralatan rumah tangga dengan
                                        kualitas terbaik.
                                    </p>
                                </div>
                            </div>
                        </div>
        </section>

        <!-- ======= Product Section ======= -->
        <section id="product" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p style="color: #6f3d94; font-weight: 900;">Product</p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        @foreach ($product as $p)
                            <div class="swiper-slide">
                                <a href="{{ $p->product_link }}">
                                    <div class="testimonial-item">
                                        <div class="mx-auto">
                                            {{-- <img src="{{ asset('assets/desain2/assets/img3/bunga.jpeg') }}" --}}
                                            <img src="{{ asset('productImg/' . $p->product_img) }}" class="img-fluid"
                                                alt=""
                                                style="border-radius: 15px; width: 272px; height: 204px;">
                                            <h3 class="mt-4 text-center" style="font-size: 18px; color: #6f3d94;">
                                                {{ $p->product_category }} </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- Inspiration -->

        <section id="inspiration" class="">
            <div class="container" data-aos="fade-up">
                <!-- Feature Tabs -->
                <div class="row feture-tabs" data-aos="fade-up">
                    <div class="col-lg-6">
                        <h3 style="font-weight: 900; color: #6f3d94; font-size: 40px; margin-left: 76px"> Inspiration
                        </h3>

                        <a href="https://www.youtube.com/@ceilo.official">
                            <div class="btn-inspiration">
                                <img src="{{ asset('assets/desain2/assets/img3/yt-logo.svg') }}" alt=""
                                    width="55px" height="55px">
                                &nbsp;&nbsp; YOUTUBE
                            </div>
                        </a>
                        <a href="">
                            <div class="btn-inspiration">
                                <img src="{{ asset('assets/desain2/assets/img3/blog.png') }}" alt=""
                                    width="50px" height="50px">
                                &nbsp;&nbsp;&nbsp; BLOG
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="{{ asset('assets/desain2/assets/img3/image-flower.jpg') }}"
                                        class="img-fluid" style="border-radius: 20px;" width="500px"
                                        alt="">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ asset('assets/desain2/assets/img3/bunga.jpeg') }}" class="img-fluid"
                                        style="border-radius: 20px;" width="500px" alt="">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ asset('assets/desain2/assets/img3/cactus.jpg') }}" class="img-fluid"
                                        style="border-radius: 20px;" width="500px" alt="">
                                </div>
                            </div>
                        </div>
                        {{-- <img src="{{ asset('assets/desain2/assets/img3/cactus.jpg') }}" style="border-radius: 10px"
                            class="img-fluid" alt="" width="540px"> --}}
                    </div>

                </div><!-- End Feature Tabs -->
            </div>
        </section>

        <!-- End Inspiration -->

        <!-- ====== Komentar Section ========= -->
        <section id="komentar" class="komentar">
            <div class="container">
                <div class="row">
                    <div class="judul col-12" data-aos="fade-up">
                        <h1> Kata Mereka</h1>
                    </div>
                    @foreach ($katamereka as $komen)
                        <div class=" col-md-12 col-xl-5">
                            <div class="user" data-aos="fade-up">
                                <img src="{{ asset('testiImg/' . $komen->testi_img) }}" alt=""
                                    width="60px" height="103px">
                                <h3 class="mt-2">{{ $komen->testi_name }}</h3>
                                <p> {{ $komen->testi_desc }} </p>
                            </div>
                        </div>
                        <div class="col-1">

                        </div>
                    @endforeach

                    <div class="foot d-flex justify-content-center" data-aos="fade-up">
                        <h2> " Berikan Sentuhan Terbaik Untuk Hasil Yang Indah "</h2>
                    </div>
                </div>
        </section>

        <!-- ======= Client Section ======= -->
        <section id="client" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Client</p>
                </header>

                <div class="row d-flex justify-content-center">
                    @foreach ($client as $c)
                        <div class="col-lg-3 col-md-6 mt-3 mb-2" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('clientImg/' . $c->client_img) }}"
                                style="display: block; margin: auto;" class="img-fluid" alt=""
                                height="150px" width="200px">
                            <p style="text-align: center;"> {{ $c->client_name }} </p>
                        </div>
                    @endforeach

                </div>

            </div>

        </section><!-- End Values Section -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="footer-newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Ingin dapat Cuan Lebih ? </h3>
                            <h1>Segera Gabung Jadi Reseller Ceilo</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-top">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-3 col-md-12 footer-info">
                            <span>Stalk us on</span>
                            <div class="row">
                                <div class="social-links col-1">
                                    <a href="https://www.tiktok.com/@ceilo.official" class="tiktok"><i
                                            class="bi bi-tiktok" style="font-weight: 600"></i></a>
                                </div>
                                <div class="links col-6 ">
                                    <a href="https://www.tiktok.com/@ceilo.official" class="tiktoks">
                                        <p style="font-weight: 600"> Ceilo.official </p>
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="social-links col-1">
                                    <a href="https://www.instagram.com/Ceiloproject.id/" class="instagram"><i
                                            class="bi bi-instagram" style="font-weight: 600"></i></a>
                                </div>
                                <div class="links col-6 ">
                                    <a href="https://www.instagram.com/Ceiloproject.id/" class="instagrams">
                                        <p style="font-weight: 600"> Ceiloproject.id </p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-6 footer-links text-center"
                            style="border-right: 5px solid #7E519F; border-left: 5px solid #7E519F;">
                            <div class="container">
                                <span> CV. Ingat Selalu Ceilo </span>
                                <p> Supplier Artificial Flowers, Home Decor, <br> Home Appliances, Souvenir, Gift. </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-12 footer-info">
                            <span>Info & Contact</span>
                            <div class="row">
                                <div class="social-links col-1">
                                    <a href="#" class="phone"><i class="bi bi-phone"
                                            style="font-weight: 600"></i></a>
                                </div>
                                <div class="links col-6 ">
                                    <p class="info-contact" style="font-weight: 600"> 087859913230 </p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="social-links col-1">
                                    <a href="#" class="mail"><i class="bi bi-envelope"
                                            style="font-weight: 600"></i></a>
                                </div>
                                <div class="links col-6 ">
                                    <p class="info-contact" style="font-weight: 600"> Ceiloproject.id@gmail.com </p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="social-links col-1">
                                    <a href="" class="geo"><i class="bi bi-geo-alt"
                                            style="font-weight: 600"></i></a>
                                </div>
                                <div class="links col-10 ">
                                    <p class="info-contact" style="font-weight: 600">Jl. Rungkut Lor Gg. III D / 51
                                        Surabaya </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" mt-2 footer-ceilo">
                        <h1> 2023 © CV. Ingat Selalu Ceilo </h1>
                    </div>
                </div>
            </div>
        </footer><!-- End Footer -->

        <img class="text-wa" src="{{ asset('assets/desain2/assets/img3/wa-chat3.png') }}" alt="">
        <a href="https://api.whatsapp.com/send?phone=6287859913230&text=Hai, Selamat datang di CV.Ingat Selalu Ceilo. Ada yang bisa dibantu?"
            class="float" target="_blank">
            <i class="bi bi-whatsapp my-float"></i>
        </a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/desain2/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('assets/desain2/assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/desain2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
        <script src="{{ asset('assets/desain2/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/desain2/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/desain2/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/desain2/assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/desain2/assets/js/main.js') }}"></script>
        {{-- Jquery --}}
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
            crossorigin="anonymous"></script>

</body>

</html>
