<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Ceilo Official</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/desain2/assets/img3/logo-rv.png') }}" rel="icon">    

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/desain2/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/desain2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/desain2/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/desain2/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/desain2/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/desain2/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/desain2/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/desain2/assets/css/style2.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header">
        <div class="container-fluid container-xl d-flex align-items-center
            justify-content-between">

            <a href="#" class="logo d-flex align-items-center">
                <img src="assets/images1/ceilologo.png" alt="Ceilo Logo">
                {{-- <span>RizCook</span> --}}
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">Product</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">Inspiration</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">Kata Mereka</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">Client</a></li>
                    <li><a class="getstarted scrollto" href="#">GET IN TOUCH</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section id="hero" class="herok d-flex align-items-center">
        <div class="container">
            <div class="kontak row">
                <div class="form col-lg-5 d-flex flex-column justify-content-center">
                    <h1> Get In Touch </h1>
                    @if (session('gagalcontact'))
                        <div class="alert alert-danger">
                            {{ session('gagalcontact') }}
                        </div>
                    @endif

                    @if (session('berhasilcontact'))
                        <div class="alert alert-success">
                            {{ session('berhasilcontact') }}
                        </div>
                    @endif
                    <form id="contact" action="{{ route('sendcontact') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name </label>
                            <input type="text" class="form-control" name="full_name" placeholder="Your Name . . ." required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                                placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number </label>
                            <input type="text" class="form-control" name="phone" placeholder="Your Phone . . ." required>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">How can we help ?</label>
                            <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-purple"> Submit </button>
                    </form>
                </div>
                
                <div class="col-lg-1"></div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="{{ asset('assets/desain2/assets/img3/bg-contact.png') }}" class="img-fluid "
                                alt="bg-contact" height="100%" width="100%" style="border-radius: 20px">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('assets/desain2/assets/img3/cactus.jpg') }}" class="img-fluid "
                                alt="cactus" height="100%" width="100%" style="border-radius: 20px">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('assets/desain2/assets/img3/bunga.jpeg') }}" class="img-fluid "
                                alt="bunga" height="100%" width="100%" style="border-radius: 20px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

</body>

</html>
