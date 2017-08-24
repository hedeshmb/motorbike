<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Motorbikes</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/1-col-portfolio.css') }}" rel="stylesheet">

</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Motorbikes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        </div>
    </div>
</nav>

<!-- Page Content -->
@yield('content')
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('vendor/popper/popper.min.js') }}'"></script>
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>