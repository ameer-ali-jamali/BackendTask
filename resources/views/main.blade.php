<!DOCTYPE html>
<html>

    <!-- Mirrored from gambolthemes.net/workwise-new/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Mar 2021 08:54:56 GMT -->

    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/line-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">

    </head>

    <body class="sign-in" oncontextmenu="return false;">

        @if(session('errorMessage'))
        <div class="alert alert-{{session('className')}} error_message" role="alert" id="authAlert">
            {{session('errorMessage')}}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger error_message" role="alert" id="alertDanger">
            <ul>
                @foreach ($errors->all() as $error)
                <ul><i class="fa-solid fa-triangle-exclamation"></i>&nbsp;{{ $error }}</ul>
                @endforeach
            </ul>
        </div>
        @endif

        @yield('content')



        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="lib/slick/slick.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/helper.js"></script>
    </body>

    <!-- Mirrored from gambolthemes.net/workwise-new/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Mar 2021 08:55:00 GMT -->

</html>
