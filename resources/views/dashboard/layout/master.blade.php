<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('dashboard/js/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('dashboard/css/fonts.min.css') }}"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/css/kaiadmin.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/css/demo.css') }}" />
</head>

<body>
    <div class="wrapper">

        <!-- Sidebar -->
        @include('dashboard.layout.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">

            @include('dashboard.layout.header')

            <div class="container">
                <div class="page-inner">

                    @yield('dashboard_content')

                </div>
            </div>

            @include('dashboard.layout.footer')
        </div>

    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('dashboard/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/kaiadmin.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/setting-demo.js') }}"></script>
    <script src="{{ asset('dashboard/js/demo.js') }}"></script>

</body>

</html>
