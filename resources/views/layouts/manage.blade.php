<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'DevMarketer - MANAGEMENT')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::to('css/manage.css') }}" rel="stylesheet">

    <link href="{{ URL::to('css/sticky-footer.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat|Saira" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Temporary navbar container fix -->
    <style>
        .navbar-toggler {
            z-index: 1;
        }

        @media (max-width: 576px) {
            nav > .container {
                width: 100%;
            }
        }

        /* Temporary fix for img-fluid sizing within the carousel */

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block;
        }
    </style>

    @yield('styles')
</head>
<body>
@include('partials.header')
<div class="container-fluid">
    <div class="row">
        @include('partials.manage-sidebar')

        @yield('content')
    </div>
</div>
@include('partials.footer')
<!-- Bootstrap core JavaScript -->
<script src="{{ URL::to('js/jquery.min.js') }}"></script>
<script src="{{ URL::to('js/tether.min.js') }}"></script>
<script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
@yield('scripts')
</body>
</html>