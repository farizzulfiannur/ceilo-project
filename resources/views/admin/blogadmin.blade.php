<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Ceilo Official</title>
    <!-- <link rel="icon" href="img/ceilologo.png" type="image/png"> -->

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
                <a href="#" aria-expanded="false">
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
                                        <h2 class="m-0">Client</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header">
                                        <h4> </h4>
                                        <div class="box_right d-flex lms_block">
                                            <div class="serach_field_2 d-none">
                                                <div class="search_inner">
                                                    <form Active="#">
                                                        <div class="search_field">
                                                            <input type="text"
                                                                placeholder="Search content here...">
                                                        </div>
                                                        <button type="submit"> <i class="ti-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="add_button ms-2">
                                                <a href="{{ route('addBlog') }}" class="btn_1"> Tambah Content </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="QA_table mb_30">

                                        <table class="table lms_table_active ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Deskripsi</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $a = 0;
                                                @endphp
                                                @foreach ($blog as $b)
                                                    @php
                                                        $a++;
                                                    @endphp
                                                    <tr>
                                                        <th scope="row">{{ $a }}</th>
                                                        <td>{{ $b->titleBlog }} </td>
                                                        <td>{{ $b->descBlog }}</td>
                                                        <td> <img src="{{ asset('imageBlog/' . $b->imageBlog) }}"
                                                                alt="image" height="40px" width="40px"
                                                                style="border-radius: 100%"></td>
                                                        <td>
                                                            <a href="{{ route('editBlog', [$b->id]) }}"
                                                                class="edit"><i class="fa fa-1x fa-edit"></i></a>
                                                            <a href="{{ route('deleteBlog', [$b->id]) }}"
                                                                class="remove ms-3"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12">
                    </div> --}}
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
