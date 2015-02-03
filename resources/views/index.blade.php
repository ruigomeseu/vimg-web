@extends('app')

@section('content')

    <!-- ******HEADER****** -->
    <header id="header" class="header navbar-fixed-top">
        <div class="container">
            <h1 class="logo">
                <a href="{{ route('index') }}">vimg</a>
            </h1><!--//logo-->
        </div><!--//container-->
    </header><!--//header-->

    <div id="fullpage" class="sections-wrapper">

    <section id="promo" class="promo section gradient-1">
        <div class="container">
            <div class="row">
                <div class="intro-area col-md-4 col-sm-12 col-xs-12">
                    <h2 class="title">Snap. Upload. Share.</h2>
                    <p class="intro">Share what you're seeing with a couple taps.</p>
                </div><!--//intro-area-->
                <div class="clearfix visible-sm-block visible-xs-block"></div>
                <div class="download-area col-md-4 col-sm-6 col-xs-12 col-md-push-4 col-sm-push-6 col-xs-push-0">
                    <ul class="list-unstyled download-buttons">
                        <li class="app-store"><a href=""{{ config('vimg.app-store-url') }}"><img class="img-responsive" src="images/buttons/btn-app-store.png" alt="Download from App Store" /></a></li>
                    </ul><!--//list-unstyled-->
                    <ul class="list-unstyled summary">
                        <li><i class="fa fa-check"></i> Capture the moment</li>
                        <li><i class="fa fa-check"></i> Get a short URL to share it</li>
                        <li><i class="fa fa-check"></i> In just a couple taps</li>
                    </ul><!--//list-unstyled-->
                </div><!--//download-area-->
                <div class="clearfix visible-xs-block"></div>
                <div class="device device-iphone text-center col-md-4 col-sm-6 col-xs-12 col-md-pull-4 col-sm-pull-6 col-xs-pull-0">
                    <div class="device-holder iphone-holder iphone-grey-holder offset-top">
                        <div class="device-holder-inner">
                            <div id="home-slideshow" class="owl-carousel owl-theme">
                                <div class="item"><img class="img-responsive" src="images/devices/screenshots/iphone6-screen-1.1.jpg" alt=""></div>
                            </div><!--//slideshow-->
                        </div><!--//device-holder-inner-->
                    </div><!--//device-holder-->
                </div><!--//phone-holder-->
                <div class="clearfix"></div>
                <div class="arrow-holder text-center">
                    <p class="lead-text"><a href="mailto:hello@ruigomes.me">Questions? Get in touch!</a></p>
                    <a href="mailto:hello@ruigomes.me" class="pe-7s-mail pe-3x"></a>
                </div>
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//promo-->


<!-- ******FOOTER****** -->

<footer id="footer" class="footer">
    <div class="container text-center">
        <ul class="links legal-links list-inline">
            <li class="last"><a href="mailto:hello@ruigomes.me">Support</a></li>
        </ul>
        <small class="copyright">Copyright &copy; {{ date('Y') }} <a href="https://ruigomes.me">Rui Gomes</a></small>

    </div><!--//container-->
</footer><!--//footer-->

@endsection
