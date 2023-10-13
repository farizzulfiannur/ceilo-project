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
    <link href="{{ asset('assets/desain2/assets/css/style-resp.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/desain2/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/desain2/assets/css/whatsapp.css') }}" rel="stylesheet">

    <style>
        .cooba .edit {
            margin-top: 110px;
        }

        .cooba .edit h2 {
            text-align: justify;
            font-size: 27px;
        }

        @media screen and (max-width: 476px) {
            .cooba .edit {
                margin-top: 0px;
            }
        }

        .features .res .text-about {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            text-align: justify;
            text-indent: 2em
        }

        .features .res .resp h1 {
            color: #6f3d94;
            font-weight: 900;
            font-size: 40px;
        }

        @media screen and (max-width: 476px) {
            .features .res .resp {
                justify-content: center;
                font-size: 20px;
            }

            .features .res .resp h1 {
                color: #6f3d94;
                font-weight: 900;
                font-size: 30px;
            }

            .features .res .text-about {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
                text-align: justify;
                margin-left: 2em;
                text-indent: 0em;
            }
        }

        .fet h3 {
            font-weight: 900;
            color: #6f3d94;
            font-size: 40px;
            margin-left: 76px
        }

        .fet .btn-inspiration {
            background-color: #E7e1f4;
            border-radius: 18px;
            padding-bottom: 6px;
            padding-top: 6px;
            padding-left: 13px;
            width: 400px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 60px;
            color: #6f3d94;
            font-weight: 700;
            font-family: "Juo", sans-serif;
            font-size: 18px;
        }

        @media screen and (max-width: 476px) {
            .fet h3 {
                font-weight: 900;
                color: #6f3d94;
                font-size: 30px;
                margin-left: 0px;
                text-align: center;
            }

            .fet .btn-inspiration {
                background-color: #E7e1f4;
                border-radius: 18px;
                padding-bottom: 6px;
                padding-top: 6px;
                padding-left: 13px;
                width: 320px;
                margin-top: 20px;
                margin-bottom: 20px;
                margin-left: 10px;
                color: #6f3d94;
                font-weight: 700;
                font-family: "Juo", sans-serif;
                font-size: 18px;
            }
        }

        .footer {
            /* background: #fff; */
            background: #fff;
            font-size: 14px;
        }

        .footer .footer-newsletter {
            padding: 50px 0;
            /* margin-bottom: 50px; */
            background: #fff;
        }

        .footer .footer-newsletter h3 {
            font-size: 52px;
            font-weight: 800;
            color: #7e519f;
        }

        .footer .footer-newsletter h1 {
            font-size: 52px;
            font-weight: 800;
            color: #7e519f;
        }

        @media screen and (max-width: 476px) {
            .footer .footer-newsletter h3 {
                font-size: 24px;
                font-weight: 800;
                color: #7e519f;
            }

            .footer .footer-newsletter h1 {
                font-size: 30px;
                font-weight: 800;
                color: #7e519f;
            }
        }

        .footer .footer-newsletter form {
            margin-top: 20px;
            background: #fff;
            padding: 6px 10px;
            position: relative;
            border-radius: 4px;
            border: 1px solid #e1ecff;
        }

        .footer .footer-newsletter form input[type="email"] {
            border: 0;
            padding: 8px;
            width: calc(100% - 140px);
        }

        .footer .footer-newsletter form input[type="submit"] {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 0 30px;
            margin: 3px;
            background: #4154f1;
            color: #fff;
            transition: 0.3s;
            border-radius: 4px;
        }

        .footer .footer-newsletter form input[type="submit"]:hover {
            background: #5969f3;
        }

        .footer .footer-top .footer-info {
            /* margin-bottom: 30px; */
        }

        .footer .footer-top .footer-info .logo {
            line-height: 0;
            margin-bottom: 15px;
        }

        .footer .footer-top .footer-info span {
            font-size: 24px;
            font-weight: 600;
            color: #7e519f;
            font-family: "Juo", sans-serif;
            /* margin-top: 3px; */
        }

        .footer .footer-top .footer-info p {
            font-size: 14px;
            line-height: 24px;
            margin-bottom: 0;
            font-family: "Juo", sans-serif;
        }

        .footer .footer-top .sosmed .social-links a {
            font-size: 20px;
            display: inline-block;
            color: rgba(76, 7, 82, 0.5);
            line-height: 0;
            margin-right: 10px;
            transition: 0.3s;
        }

        .footer .footer-top .sosmed .social-links a:hover {
            color: #7e519f;
        }

        .footer .footer-top .sosmeds .social-links a {
            font-size: 20px;
            display: inline-block;
            color: rgba(76, 7, 82, 0.5);
            line-height: 0;
            margin-right: 10px;
            transition: 0.3s;
        }

        .footer .footer-top .sosmeds .social-links a:hover {
            color: #7e519f;
        }

        .footer .footer-top .sosmed .links .tiktoks {
            font-size: 20px;
            display: inline-block;
            color: rgba(76, 7, 82, 0.5);
            line-height: 0;
            margin-right: 10px;
            transition: 0.3s;
        }

        .footer .footer-top .sosmed .links .tiktoks p {
            font-size: 16px;
            font-weight: 500;
        }

        .footer .footer-top .sosmed .links .tiktoks p:hover {
            color: #7e519f;
        }

        .footer .footer-top .sosmeds .links .info-contact {
            font-size: 15px;
            font-weight: 500;
            color: #7e519f;
        }

        .footer .footer-top .sosmed .links .instagrams {
            font-size: 20px;
            display: inline-block;
            color: rgba(76, 7, 82, 0.5);
            line-height: 0;
            margin-right: 10px;
            transition: 0.3s;
        }

        .footer .footer-top .sosmed .links .instagrams p {
            font-size: 16px;
            font-weight: 500;
        }

        .footer .footer-top .sosmed .links .instagrams p:hover {
            color: #7e519f;
        }

        @media screen and (max-width: 476px) {
            .footer .footer-top .footer-info span {
                font-size: 24px;
                font-weight: 600;
                color: #7e519f;
                font-family: "Juo", sans-serif;
                display: flex;
                justify-content: center;
                margin-top: 0px;
            }

            .footer .footer-top .sosmed {
                display: flex;
                justify-content: center;
                margin-left: 20px;
            }

            .footer .footer-top .sosmeds {
                display: flex;
                justify-content: center;
                margin-bottom: 5px;
            }
        }

        .footer .footer-top h4 {
            font-size: 16px;
            font-weight: bold;
            color: #012970;
            text-transform: uppercase;
            position: relative;
            padding-bottom: 12px;
        }

        .footer .footer-top .footer-links span {
            font-size: 24px;
            font-weight: 600;
            color: #7e519f;
            font-family: "Juo", sans-serif;
            /* margin-top: 3px; */
        }

        .footer .footer-top .footer-links p {
            font-size: 19px;
            font-weight: 500;
            color: #7e519f;
            font-family: "Juo", sans-serif;
        }

        .footer .footer-top .footer-links {
            margin-bottom: 30px;
            border-right: 5px solid #7E519F;
            border-left: 5px solid #7E519F;
        }

        .footer .footer-top .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        @media screen and (max-width: 476px) {
            .footer .footer-top .footer-links {
                margin-bottom: 0px;
                border-right: 0px solid #7E519F;
                border-left: 0px solid #7E519F;
                border-top: 0px solid #7E519F;
                border-bottom: 0px solid #7E519F;
            }
        }

        .footer .footer-top .footer-links ul i {
            padding-right: 2px;
            color: #d0d4fc;
            font-size: 12px;
            line-height: 0;
        }

        .footer .footer-top .footer-links ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        .footer .footer-top .footer-links ul li:first-child {
            padding-top: 0;
        }

        .footer .footer-top .footer-links ul a {
            color: #013289;
            transition: 0.3s;
            display: inline-block;
            line-height: 1;
        }

        .footer .footer-top .footer-links ul a:hover {
            color: #4154f1;
        }

        .footer .footer-top .footer-contact p {
            line-height: 26px;
        }

        .footer .footer-top .footer-ceilo h1 {
            font-size: 20px;
            font-weight: 500;
            color: #7e519f;
            font-family: "Juo", sans-serif;
            margin-bottom: 10px;
        }

        .footer .copyright {
            text-align: center;
            padding-top: 30px;
            color: #012970;
        }

        .footer .credits {
            padding-top: 10px;
            text-align: center;
            font-size: 13px;
            color: #012970;
        }


        .komentar {
            background-color: #E7E1F4;
        }

        .komentar .user {
            width: 500px;
            height: 172px;
            text-align: center;
            padding: 15px;
            padding-left: 50px;
            /* padding: 20px 70px; */
            box-sizing: border-box;
            /* background: #6f3d94; */
            background: #6f3d94;
            border-radius: 40px;
            box-shadow: 0 10px 20px -5px #00000061;
            position: relative;
            margin-top: 40px;
            margin-left: 40px;
        }

        .komentar .user img {
            height: 103px;
            width: 120px;
            border-radius: 20px;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 10px;
            /* border: 15px solid white; */
            border-radius: 20px;
            background-color: white;
            position: absolute;
            top: 15px;
            left: 18%;
            transform: translateX(-110%);
        }

        .komentar .judul h1 {
            /* font-size: 2x; */
            font-weight: 900;
            color: #6f3d94;
            font-family: "Jua", sans-serif;
        }

        .komentar .user p {
            font-family: "Jua", sans-serif;
            font-size: 12px;
            color: #f5f5f5;
            /* line-height: 32px; */
            margin-left: 52px;
            /* padding: 20px; */
            text-align: justify;
        }

        .komentar .user h3 {
            font-size: 26px;
            margin-left: 52px;
            text-align: justify;
            color: #fcfbfd;
            font-family: "Jua", sans-serif;
        }

        .komentar .foot h2 {
            font-weight: 700;
            color: #6f3d94;
            margin-top: 40px;
        }


        @media screen and (max-width: 476px) {

            .komentar .judul h1 {
                text-align: center;
                font-weight: 900;
                color: #6f3d94;
                font-family: "Jua", sans-serif;
            }

            .komentar .user {
                width: 300px;
                height: 142px;
                text-align: center;
                padding: 15px;
                padding-left: 50px;
                box-sizing: border-box;
                background: #6f3d94;
                border-radius: 40px;
                box-shadow: 0 10px 20px -5px #00000061;
                position: relative;
                margin-top: 40px;
                margin-left: 40px;
            }

            .komentar .user img {
                width: 90px;
                height: 90px;
                margin-left: 10px;
                border-radius: 20px;
                padding-left: 20px;
                padding-right: 20px;
                padding-top: 10px;
                border-radius: 20px;
                background-color: white;
                position: absolute;
                top: 15px;
                left: 18%;
                transform: translateX(-110%);
            }

            .komentar .user h3 {
                margin-left: 20px;
                font-size: 18px;
            }

            .komentar .user p {
                margin-left: 20px;
                font-size: 8.5px;
            }

            .komentar h2 {
                text-align: center;
            }
        }

        .image img {
            width: 1150px;
            height: 1000px;
        }

        @media screen and (max-width: 476px) {
            .image img {
                width: 370px;
                height: 300px;
            }
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header">
        <div class="container-fluid container-xl d-flex align-items-center
        justify-content-between">

            <a href="#" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/images1/ceilologo.png') }}" alt="Ceilo Logo">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">Product</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">Inspiration</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">Kata Mereka</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">Client</a></li>
                    <li><a class="getstarted scrollto" href="{{ route('contactku') }}">GET IN TOUCH</a></li>
                    {{-- <li><a class="getstarted scrollto getintouch" id="getintouch">GET IN TOUCH</a></li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="features">

            <div class="container" data-aos="fade-up">
                <div class="row res">
                    <div class="col-12 mt-1 mb-3 ms-lg-3 ms-md-0 text-center">
                        <h1> {{ $blog->titleBlog }} </h1>
                    </div>
                    <div class="col-12 image">
                        <img src="{{ asset('imageBlog/' . $blog->imageBlog) }}" alt="image"
                            style="border-radius: 15px">
                    </div>
                    <div style="margin: 0; text-indent: 2rem; text-align: justify; font-size: 30px; color: black" class="mt-5 col-12"
                        id="content">
                        {{ $blog->descBlog }}
                    </div>
                </div>
            </div>
        </section>

        {{-- <img class="text-wa" src="{{ asset('assets/desain2/assets/img3/wa-chat3.png') }}" alt="">
        <a href="https://api.whatsapp.com/send?phone=6287859913230&text=Hai, Selamat datang di CV.Ingat Selalu Ceilo. Ada yang bisa dibantu?"
            class="float" target="_blank">
            <i class="bi bi-whatsapp my-float"></i>
        </a> --}}

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
