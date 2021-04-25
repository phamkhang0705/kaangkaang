<!DOCTYPE HTML>
<html>
<head>
    <title>Gika | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Gifty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="/theme/css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="/theme/css/style.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="/theme/css/jquery.countdown.css"/>
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <script type="text/javascript" src="/theme/js/jquery-1.11.1.min.js"></script>
    <!-- dropdown -->
    <script src="/theme/js/jquery.easydropdown.js"></script>
    <!-- start menu -->
    <link href="/theme/css/megamenu.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="/theme/js/megamenu.js"></script>
    <script>
        $(document).ready(function () {
            $(".megamenu").megamenu();
        });
    </script>
    <script src="/theme/js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <script src="/theme/js/jquery.countdown.js"></script>
    <script src="/theme/js/script.js"></script>
</head>
<body>
@include("layouts.header_top")
@include("layouts.header_bottom")
@include("layouts.menu")
@include("layouts.index_slider")
<div class="content">
    @yield('content')
</div>

@include("layouts.blog")
@include("layouts.footer")
</body>
</html>
