<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Page not found!</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('admin/css/core/libs.min.css') }}">


    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/css-dist/hope-ui.min.css?v=4.0.0') }}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/custom.min.css?v=4.0.0') }}">

    <!-- Dark Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/dark.min.css') }}">

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/customizer.min.css') }}">

    <!-- RTL Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/rtl.min.css') }}">


</head>

<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body">
            </div>
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>

        <div class="gradient">
            <div class="container">
                <img src="{{ asset('admin/images/error/404.png') }}" class="img-fluid mb-4 w-50" alt="">
                <h2 class="mb-0 mt-4 text-white">Oops! This Page is Not Found.</h2>
                <p class="mt-2 text-white">The requested page dose not exist.</p>
                @if (@\Auth::user()->id)
                <a class="btn bg-white text-primary d-inline-flex align-items-center" href="{{ route('dashboard') }}">Back to
                    Dashboard</a>
                @else
                <a class="btn bg-white text-primary d-inline-flex align-items-center" href="{{ route('home') }}">Back to
                    Home</a>
                @endif
            </div>
            <div class="box">
                <div class="c xl-circle">
                    <div class="c lg-circle">
                        <div class="c md-circle">
                            <div class="c sm-circle">
                                <div class="c xs-circle">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Library Bundle Script -->
    <script src="{{ asset('admin/js/core/libs.min.js') }}"></script>

    <!-- External Library Bundle Script -->
    <script src="{{ asset('admin/js/core/external.min.js') }}"></script>

    <!-- Widgetchart Script -->
    <script src="{{ asset('admin/js/charts/widgetcharts.js') }}"></script>

    <!-- mapchart Script -->
    <script src="{{ asset('admin/js/charts/vectore-chart.js') }}"></script>
    <script src="{{ asset('admin/js/charts/dashboard.js') }}"></script>

    <!-- fslightbox Script -->
    <script src="{{ asset('admin/js/plugins/fslightbox.js') }}"></script>

    <!-- Settings Script -->
    <script src="{{ asset('admin/js/plugins/setting.js') }}"></script>

    <!-- Slider-tab Script -->
    <script src="{{ asset('admin/js/plugins/slider-tabs.js') }}"></script>

    <!-- Form Wizard Script -->
    <script src="{{ asset('admin/js/plugins/form-wizard.js') }}"></script>

    <!-- AOS Animation Plugin-->

    <!-- App Script -->
    <script src="{{ asset('admin/js/hope-ui.js') }}" defer></script>


</body>

</html>
