<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Prefeitura Municipal</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Rafael Chechi">

    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/misc.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blue-scheme.css')}}">

    <script src="{{asset('assets/js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon"/>

    <style>
        @media only screen and (min-width: 992px) {
            .main-navigation {
                display: flex;
                justify-content: center;
            }
        }
    </style>

</head>
<body>
<div class="responsive_menu">
    <ul class="main_menu">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('iptu')}}">Consulta IPTU</a></li>
    </ul>
</div>

<header class="site-header clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="main-navigation">
                    <nav class="main-nav visible-md visible-lg">
                        <ul class="sf-menu">
                            <li class="active"><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('iptu')}}">Consulta IPTU</a></li>
                        </ul>
                    </nav>

                    <div class="responsive-navigation visible-sm visible-xs">
                        <a href="#nogo" class="menu-toggle-btn">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</header>

<section id="homeIntro" class="parallax first-widget">
    <div class="parallax-overlay">
        <div class="container home-intro-content">
            <div class="row">
                <div class="col-md-12">
                    <h2>PREFEITURA MUNICIPAL</h2>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</section> <!-- /#homeIntro -->

<section class="cta clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.cta -->

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="footer-nav clearfix">
                    <ul class="footer-menu">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('iptu')}}">Consulta IPTU</a></li>
                    </ul> <!-- /.footer-menu -->
                </nav> <!-- /.footer-nav -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <p class="copyright-text">Copyright &copy; 2020 Prefeitura Municipal</p>
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</footer> <!-- /.site-footer -->

<!-- Scripts -->
<script src="{{asset('assets/js/min/plugins.min.js')}}"></script>
<script src="{{asset('assets/js/min/medigo-custom.min.js')}}"></script>

</body>
</html>
