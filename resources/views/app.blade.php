<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="GTA Network server monitoring, stats, banner and live signatures!">
    <meta name="keywords" content="gtanetwork, game state, server info, multiplayer, server, information">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <title>GTA Network - Server State</title>

    <!-- Application CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    @include('partials._header')

    @yield('content')

    @include('partials._footer')

</div>

<!-- Javascript! -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('javascript')
</body>
</html>
