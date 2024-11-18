<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Standard Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SeventhQueen" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/less/base.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/less/header.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/less/theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/icon/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">
    <link rel="icon" href="{{ asset('assets/front/images/ico/favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <script src="{{ asset('assets/front/library/modernizr-custom.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
    <title>Homepage</title>
</head>

<body class="no-transition">
    <div id="page-wrapper">
        <!-- DEFAULT HEADER -->
        <header
            class="header-section ths header-shadow header-sticky header-slide-up header-transparent is-transparent equal-tablet-header-items equal-mobile-header-items">
            <div class="header-content">
                <div class="ui container grid">
                    <div class="header-item header-left"></div>
                    <div class="header-item header-center flex-grow-true"></div>
                    <div class="header-item header-right flex-align-right">
                        <a class="sidemenu-trigger hamburger item" data-trigger-for="menu01">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </a>
                        <div class="menu-default burger-sidemenu sidemenu-open-right icons-left profile-priority slide-out-sq dimmed dropdown-open-right"
                            data-burger="menu01">
                            <a class="sidemenu-trigger xclose-sq hamburger hamburger-elastic item"
                                data-trigger-for="menu01">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <!-- FOOTER -->
        <div id="footer">
            <div class="row">
                <div class="ui twelve wide mobile eight wide computer column">
                    <a href="" class="footer-logo">
                        <img src="{{ asset('assets/front/images/logo-mycar-transparent.png') }}"
                            srcset="{{ asset('assets/front/images/logo-mycar-transparent.png') }} 1x, {{ asset('assets/front/images/logo-mycar-transparent@2x.png') }} 2x"
                            alt="mycar logo">
                        © 4wheel 2021
                    </a>
                </div>
                <div class="ui twelve wide mobile four wide computer column">
                    <ul class="social-links-sq list-style-inline-sq list-default-sq">
                        <li><a href="" class="fb"><i class="icon icon-logo-facebook2"></i></a></li>
                        <li><a href="" class="tw"><i class="icon icon-logo-twitter-bird2"></i></a></li>
                        <li><a href="" class="gp"><i class="icon icon-logo-circle-google-plus-22"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('assets/front/library/jquery-2.2.0.min.js') }}"></script>
    <script src="{{ asset('assets/front/library/flexmenu.js') }}"></script>
    <script src="{{ asset('assets/front/library/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/front/library/wNumb.js') }}"></script>
    <script src="{{ asset('assets/front/library/jrespond.min.js') }}"></script>
    <script src="{{ asset('assets/front/library/scrollspy.min.js') }}"></script>
    <script src="{{ asset('assets/front/library/visibility.js') }}"></script>
    <script src="{{ asset('assets/front/library/accordion.js') }}"></script>
    <script src="{{ asset('assets/front/library/dropdown-custom.js') }}"></script>
    <script src="{{ asset('assets/front/library/sticky.js') }}"></script>
    <script src="{{ asset('assets/front/library/page-transition.js') }}"></script>
    <script src="{{ asset('assets/front/library/checkbox.js') }}"></script>
    <script src="{{ asset('assets/front/library/transition.js') }}"></script>
    <script src="{{ asset('assets/front/library/sidebar.js') }}"></script>
    <script src="{{ asset('assets/front/library/modal.js') }}"></script>
    <script src="{{ asset('assets/front/library/dimmer.js') }}"></script>
    <script src="{{ asset('assets/front/library/popup.js') }}"></script>
    <script src="{{ asset('assets/front/library/calendar.js') }}"></script>
    <script src="{{ asset('assets/front/library/slick.js') }}"></script>
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <script src="{{ asset('assets/front/library/header.js') }}"></script>
    <script src="{{ asset('assets/front/library/functions.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    @yield('page_level_script')
</body>

</html>
