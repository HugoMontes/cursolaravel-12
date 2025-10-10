<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Cinema')</title>
    <link href="{{ asset('web/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{ asset('web/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <script src="{{ asset('web/js/jquery.min.js') }}"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Custom CSS -->
    @yield('style')
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- header-section-starts -->
    <div class="full">
        @include('web.template.menu')
        <div class="main">
            <div class="error-content">
                @yield('content')
                <div class="footer">
                    <h6>Disclaimer : </h6>
                    <p class="claim">This is a freebies and not an official website, I have no intention of disclose
                        any movie, brand, news.My goal here is to train or excercise my skill and share this freebies.
                    </p>
                    <a href="example@mail.com">example@mail.com</a>
                    <div class="copyright">
                        <p> Template by <a href="http://w3layouts.com"> W3layouts</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        @yield('script')
    </div>
</body>

</html>
