<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>General Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('adminAsset/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminAsset/assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('adminAsset/assets/modules/summernote/summernote-bs4.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('adminAsset/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('adminAsset/assets/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <!-- sidebar and navbar content -->
            @include('admin.layouts.sidebar')

            <!-- Main Content -->
            @yield('content')
        </div>
    </div>


    <!-- General JS Scripts -->
    <script src="{{ asset('adminAsset/assets/modules/jquery.min.js') }} "></script>
    <script src="{{ asset('adminAsset/assets/modules/popper.js') }} "></script>
    <script src="{{ asset('adminAsset/assets/modules/tooltip.js') }} "></script>
    <script src="{{ asset('adminAsset/assets/modules/bootstrap/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('adminAsset/assets/modules/nicescroll/jquery.nicescroll.min.js') }} "></script>
    <script src="{{ asset('adminAsset/assets/modules/moment.min.js') }} "></script>
    <script src="{{ asset('adminAsset/assets/js/stisla.js') }} "></script>

    <!-- JS Libraies -->
    <script src="{{ asset('adminAsset/assets/modules/summernote/summernote-bs4.js') }} "></script>
    <!-- Template JS File -->
    <script src="{{ asset('adminAsset/assets/js/scripts.js') }} "></script>
    <script src="{{ asset('adminAsset/assets/js/custom.js') }} "></script>
</body>

</html>
