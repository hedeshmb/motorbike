<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>

    <meta name="description" content="blank page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!--Basic Styles-->
    <link href="{{ URL::asset('assets/css/bootstrap.m') }}in.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/font-awesom') }}e.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/weather-ico') }}ns.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300"
          rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link id="beyond-link" href="{{ URL::asset('assets/css/beyond.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/demo.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/typicons.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="{{ URL::asset('assets/js/skins.min.js') }}"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body>
<!-- Loading Container -->
<div class="loading-container">
    <div class="loader"></div>
</div>
<!--  /Loading Container -->
<!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="assets/img/logo.png" alt="" />
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
        </div>
    </div>
</div>
<!-- /Navbar -->
<!-- Main Container -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        @include('layouts.backend.sidebar')
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Header -->
            <div class="page-header position-relative">
                <div class="header-title">
                    <h1>
                        Dashboard
                    </h1>
                </div>
                <!--Header Buttons-->
                <div class="header-buttons">
                    <a class="sidebar-toggler" href="#">
                        <i class="fa fa-arrows-h"></i>
                    </a>
                    <a class="refresh" id="refresh-toggler" href="">
                        <i class="glyphicon glyphicon-refresh"></i>
                    </a>
                    <a class="fullscreen" id="fullscreen-toggler" href="#">
                        <i class="glyphicon glyphicon-fullscreen"></i>
                    </a>
                </div>
                <!--Header Buttons End-->
            </div>
            <!-- /Page Header -->
            <!-- Page Body -->
            <div class="page-body">
                @yield('content')
            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Container -->
    <!-- Main Container -->

</div>

<!--Basic Scripts-->
<script src="{{ URL::asset('assets/js/jquery-2.0.3.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!--Beyond Scripts-->
<script src="{{ URL::asset('assets/js/beyond.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
</body>
<!--  /Body -->
</html>