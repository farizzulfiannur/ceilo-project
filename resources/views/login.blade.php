<!doctype html>
<html>

<!-- Mirrored from demos.bootstraplayouts.com/previews/forms/tabs-login-registration/tab-forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Apr 2023 00:21:36 GMT -->

<head>
    <title>Login Ceilo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/login/bootstrap/css/bootstrap.min.css') }}">
    <!-- Favicons -->
    <link href="{{ asset('assets/desain2/assets/img3/logo-rv.png') }}" rel="icon">    
    <!-- jQuery library -->
    <script src="{{ asset('vendor/login/bootstrap/js/jquery.min.js') }}"></script>

    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('vendor/login/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Page CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/css-login/tabs.css') }}">

    <!--Font-Awesome CSS File-->
    <link rel="stylesheet" href="{{ asset('assets/css/css-login/font-awesome/css/font-awesome.min.css') }}">

</head>

<body>

    <!--Container Starts-->
    <div class="container text-center">

        <!--Row Starts-->
        <div class="row">

            <!--Column Starts-->
            <div class="col-md-6 col-md-offset-3">
                <!--Panel Starts-->
                <div class="panel panel-default">

                    <!--Panel Heading Starts-->
                    <div class="panel-heading nopadding">
                        <div class="row">
                            <div class="btn-group btn-group-justified">
                                <a href="#" class="btn btn-default btn-lg active" id="login_link">Login</a>
                                <a href="#" class="btn btn-default btn-lg" id="registration_link">Register</a>
                            </div>
                        </div>
                    </div>
                    <!--Panel Heading Ends-->

                    <!--Panel Body Starts-->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--Login Form Starts-->
                                <form id="login_form" action="{{ route('proseslogin') }}" method="POST">
                                    @csrf
                                    <div class="title">
                                        <h2>LOGIN FORM</h2>
                                    </div>
                                    {{-- https://fomantic-ui.com/introduction/getting-started.html --}}
                                    @if (session('gagal'))
                                        <div class="alert alert-danger">
                                            <b> Oops! </b> {{ session('gagal') }}
                                        </div>
                                    @endif

                                    @if (session('berhasil'))
                                        <div class="alert alert-success">
                                            <b> Hooray! </b> {{ session('berhasil') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-envelope login_form_icons"></i></span>
                                            <input type="email" class="form-control input input-lg"
                                                placeholder="Your Email" name="email" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-lock login_form_icons"></i></span>
                                            <input type="password" class="form-control input input-lg"
                                                placeholder="Your Password" name="password" required>
                                        </div>
                                    </div>

                                    <div class="checkbox text-left">
                                        <label><input type="checkbox"><span class="remember_me">Remember
                                                me</span></label>
                                    </div>

                                    <div class="butn">
                                        <button class="btn btn-default btn-block btn-lg"><span
                                                class="glyphicon glyphicon-share-alt"></span> Login</button>
                                    </div>

                                    {{-- <div class="forgot">
                                        <a href="#">Forgot Password?</a>
                                    </div>

                                    <div class="new_here">
                                        <p>New Here ? <a href="#">Join Us</a></p>
                                    </div> --}}
                                </form>
                                <!--Login Form Ends-->

                                <!--Registration Form Starts-->
                                <form id="registration_form" action="{{ route('prosesregistrasi') }}" method="POST">
                                    @csrf
                                    <div class="title">
                                        <h2>REGISTER FORM</h2>
                                    </div>
                                    @if (session('gagal'))
                                        <div class="alert alert-danger">
                                            <b> Oops! </b> {{ session('gagal') }}
                                        </div>
                                    @endif

                                    @if (session('berhasil'))
                                        <div class="alert alert-success">
                                            <b> Hooray! </b> {{ session('berhasil') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="glyphicon glyphicon-user registration_form_icons"></i></span>
                                                    <input type="text" class="form-control input input-lg"
                                                        placeholder="First Name" name="first_name" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="glyphicon glyphicon-user registration_form_icons"></i></span>
                                                    <input type="text" class="form-control input input-lg"
                                                        placeholder="Last Name" name="last_name" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-envelope registration_form_icons"></i></span>
                                            <input type="email" class="form-control input input-lg"
                                                placeholder="Your Email" name="email" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-lock registration_form_icons"></i></span>
                                            <input type="password" class="form-control input input-lg"
                                                placeholder="Your Password" name="password" required>
                                        </div>
                                    </div>

                                    {{-- <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-lock registration_form_icons"></i></span>
                                            <input type="password" class="form-control input input-lg"
                                                placeholder="Confirm Password" name="password" required>
                                        </div>
                                    </div> --}}

                                    <div class="checkbox text-left">
                                        <label><input type="checkbox"><span class="check">I agree the terms &
                                                conditions.</span></label>
                                    </div>

                                    <div class="butn">
                                        <button class="btn btn-default btn-block btn-lg"><span
                                                class="glyphicon glyphicon-share-alt"></span> Register</button>
                                    </div>
                                </form>
                                <!--Registration Form Ends-->

                            </div>
                        </div>
                    </div>
                    <!--Panel Body Ends-->

                </div>
                <!--Panel Ends-->

                <!--Social Button Starts-->
                <!-- <div class="social-buttons">
    <div class="row">
     <h4><b>Login With</b></h4>
    </div>
     
    <div class="row">
     <div class="col-sm-4">
      <button class="btn btn-default btn-lg btn_facebook">
       <i class="fa fa-facebook"></i> Facebook
      </button>
     </div>
 
     <div class="col-sm-4">
      <button class="btn btn-default btn-lg btn_twitter">
       <i class="fa fa-twitter"></i> Twitter
      </button>
     </div>

     <div class="col-sm-4">
      <button class="btn btn-default btn-lg btn_gmail">
       <i class="fa fa-google"></i> Gmail
      </button>
     </div>
    </div>
   </div> -->
                <!--Social Button Ends-->

            </div>
            <!--Column Ends-->

        </div>
        <!--Row Ends-->

    </div>
    <!--Container Ends-->

    <!--Script Starts-->
    <script>
        $(function() {

            $('#login_link').click(function(e) {
                $("#login_form").delay(100).fadeIn(100);
                $("#registration_form").fadeOut(100);
                $('#registration_link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#registration_link').click(function(e) {
                $("#registration_form").delay(100).fadeIn(100);
                $("#login_form").fadeOut(100);
                $('#login_link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });
    </script>
    <!--Script Ends-->

</body>

</html>
