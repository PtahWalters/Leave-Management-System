<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta  name="keywords" content="leave, management, system" />
    <meta  name="description" content="Leave management system" />
    <meta  itemprop="name" content="Leave Management System" />
    <meta  itemprop="description" content="Simple to use leave management system" />
    <meta  itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/492/original/opt_sd_laravel_thumbnail.jpg" />
    <meta  name="twitter:card" content="product" />
    <meta  name="twitter:site" content="@LMS" />
    <meta  name="twitter:title" content="Leave Management System" />
    <meta  name="twitter:description" content="Leave Management System" />
    <meta  name="twitter:creator" content="@LMS" />
    <meta  name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/492/original/opt_sd_laravel_thumbnail.jpg" />
    <meta  property="fb:app_id" content="655968634437471" />
    <meta  property="og:title" content="Leave Management System" />
    <meta  property="og:type" content="article" />
    <meta  property="og:url" content="https://www.creative-tim.com/live/vue-argon-dashboard-laravel" />
    <meta  property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/492/original/opt_sd_laravel_thumbnail.jpg" />
    <meta  property="og:description" content="Leave Management System" />
    <meta  property="og:site_name" content="Ptah Walters" />
    
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Leave Management System
    </title>
    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Select styles -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css') }}" rel="stylesheet" />
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    

    @livewireStyles

</head>

<body class="g-sidenav-show bg-gray-100">

    {{ $slot }}

    <!--   Core JS Files   -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
        $(document).ready(function() {
            $('select').select2();
        });

    </script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.2') }}"></script>
    @livewireScripts
</body>

</html>