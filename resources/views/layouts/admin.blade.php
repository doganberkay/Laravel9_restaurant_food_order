<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/admin/img/favicon.png" rel="icon">
    <link href="/assets/admin/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/admin/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/assets/admin/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/assets/admin/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/admin/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/admin/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.2.2
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    @yield('head')
</head>
<body>

@include('Admin._header')
@include('Admin._sidebar')
<main id="main" class="main">
@section('content')
@show
</main><!-- End #main -->

@include('Admin._footer')
@yield('foot')

</body>
</html>
