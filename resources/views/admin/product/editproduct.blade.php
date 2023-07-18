<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Ceilo Official</title>
    <!-- <link rel="icon" href="img/ceilologo.png" type="image/png"> -->
    <!-- Favicons -->
    <link href="{{ asset('assets/desain2/assets/img3/logo-rv.png') }}" rel="icon">    
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/gijgo/gijgo.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/datepicker/date-picker.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/scroll/scrollable.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/datatable/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/morris/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/css/metisMenu.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/colors/default.css') }}" id="colorSkinCSS">
</head>

<body class="crm_body_bg">


    <nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <a href="index.html"><img src="{{ asset('assets/admin/img/ceilologo.png') }}" alt="Ceilo Logo"></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a href="{{ route('dashboard') }}" aria-expanded="false">

                    <div class="icon_menu">
                        <img src="{{ asset('assets/admin/img/menu-icon/dashboard.svg') }}" alt="">
                    </div>
                    <span>Dashboard</span>
                </a>
                <!-- <ul>
                    <li><a href="index.html">Marketing</a></li>
                    <li><a class="active" href="index_2.html">Default</a></li>
                    <li><a href="index_3.html">Dark Menu</a></li>
                </ul> -->
            </li>
            <li class="mm-active">
                <a href="{{ route('contact') }}" aria-expanded="false">

                    <div class="icon_menu">
                        <img src="{{ asset('assets/admin/img/menu-icon/contact.svg') }}" alt="">
                    </div>
                    <span>Contact Us</span>
                </a>
                <!-- <ul>
                    <li><a href="index.html">Marketing</a></li>
                    <li><a class="active" href="index_2.html">Default</a></li>
                    <li><a href="index_3.html">Dark Menu</a></li>
                </ul> -->
            </li>
            <li class="mm-active">
                <a href="{{ route('adminproduct') }}" aria-expanded="false">

                    <div class="icon_menu">
                        <img src="{{ asset('assets/admin/img/menu-icon/product.svg') }}" alt="">
                    </div>
                    <span> Product </span>
                </a>
            </li>
            <li class="mm-active">
                <a href="{{ route('adminkata') }}" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/admin/img/menu-icon/multiuser.svg') }}" alt="">
                    </div>
                    <span> Kata Mereka </span>
                </a>
            </li>
            <li class="mm-active">
                <a href="{{ route('adminclient') }}" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/admin/img/menu-icon/clientss.jpg') }}" alt="">
                    </div>
                    <span> Client </span>
                </a>
            </li>
        </ul>
    </nav>


    <section class="main_content dashboard_part default_content">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner default_header d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area d-flex align-items-center">
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="profile_info">
                                <img src="{{ asset('assets/admin/img/client_img.png') }}" alt="#">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <p>Administrator</p>
                                        <h5>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="{{ route('logout') }}  ">Log Out </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h2 class="m-0">Edit Product</h2>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        <a class="btn-close btn-outline-danger" aria-label="close"
                                            href="{{ route('adminproduct') }}" role="button"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="card-body">
                                    <form action=" {{ route('updateproduct', [$product->id]) }} " method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        {{-- @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li> {{ $error }} </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif --}}
                                        <div class="form-group mb-3">
                                            <label for="title">Kategori</label>
                                            <input type="text" name="product_category" id="product_category" value="{{ $product->product_category }}"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="title">Link Product</label>
                                            <input type="text" name="product_link" id="product_link" value="{{ $product->product_link }}"
                                                class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <p style="color: black;" for=""> Image : </p>
                                            <img src="{{ asset('/productImg/' . $product->product_img) }}"
                                                class="img-responsive mt-2" style="max-height: 100px; max-width: 100px;"
                                                alt="" srcset="">
                                            <input type="file" id="input-file-now-custom-3"
                                                class="form-control m-4" name="product_img" required>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_part default_footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>Copyright © 2023 Ceilo Official. - Designed by
                                Mochammad Fariz Zulfiannur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/admin/js/jquery1-3.4.1.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/popper1.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/bootstrap1.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/metisMenu.js') }}"></script>

    <script src="{{ asset('assets/admin/vendors/count_up/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('assets/admin/vendors/chartlist/Chart.min.js') }} "></script>

    <script src="{{ asset('assets/admin/vendors/count_up/jquery.counterup.min.js') }} "></script>

    <script src="{{ asset('assets/admin/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('assets/admin/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/admin/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart.min.js') }}"></script>

    <script src="{{ asset('assets/admin/vendors/progressbar/jquery.barfiller.js') }}"></script>

    <script src="{{ asset('assets/admin/vendors/tagsinput/tagsinput.js') }}"></script>

    <script src="{{ asset('assets/admin/vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/am_chart/amcharts.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/apex_chart/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/apex_chart/apex_dashboard.js') }}"></script>

    <script src="{{ asset('assets/admin/vendors/scroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/scroll/scrollable-custom.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/chart_am/core.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/chart_am/charts.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/chart_am/animated.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/chart_am/kelly.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/chart_am/chart-custom.js') }}"></script>

    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
</body>

</html>
