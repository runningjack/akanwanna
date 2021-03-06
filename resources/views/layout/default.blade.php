
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Unify - Responsive Website Template</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{url('')}}/preview/akawana/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('')}}/preview/akawana/assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{url('')}}/preview/akawana/assets/css/headers/header-default.css">
    <link rel="stylesheet" href="{{url('')}}/preview/akawana/assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{url('')}}/preview/akawana/assets/plugins/animate.css">
    <link rel="stylesheet" href="{{url('')}}/preview/akawana/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="{{url('')}}/preview/akawana/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('')}}/preview/akawana/assets/plugins/parallax-slider/css/parallax-slider.css">
    <link rel="stylesheet" href="{{url('')}}/preview/akawana/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="{{url('')}}/preview/akawana/assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="{{url('')}}/preview/akawana/assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{url('')}}/preview/akawana/assets/css/custom.css">
</head>

<body>
<div class="wrapper">
@include("includes.header")
@yield("content")
@include("includes.footer")

</div><!--/wrapper-->

<!--=== Style Switcher ===-->
<i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
<div class="style-switcher animated fadeInRight">
    <div class="style-swticher-header">
        <div class="style-switcher-heading">Style Switcher</div>
        <div class="theme-close"><i class="icon-close"></i></div>
    </div>

    <div class="style-swticher-body">
        <!-- Theme Colors -->
        <div class="style-switcher-heading">Theme Colors</div>
        <ul class="list-unstyled">
            <li class="theme-default theme-active" data-style="default" data-header="light"></li>
            <li class="theme-blue" data-style="blue" data-header="light"></li>
            <li class="theme-orange" data-style="orange" data-header="light"></li>
            <li class="theme-red" data-style="red" data-header="light"></li>
            <li class="theme-light" data-style="light" data-header="light"></li>
            <li class="theme-purple last" data-style="purple" data-header="light"></li>
            <li class="theme-aqua" data-style="aqua" data-header="light"></li>
            <li class="theme-brown" data-style="brown" data-header="light"></li>
            <li class="theme-dark-blue" data-style="dark-blue" data-header="light"></li>
            <li class="theme-light-green" data-style="light-green" data-header="light"></li>
            <li class="theme-dark-red" data-style="dark-red" data-header="light"></li>
            <li class="theme-teal last" data-style="teal" data-header="light"></li>
        </ul>

        <!-- Theme Skins -->
        <div class="style-switcher-heading">Theme Skins</div>
        <div class="row no-col-space margin-bottom-20 skins-section">
            <div class="col-xs-6">
                <button data-skins="default" class="btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn handle-skins-btn">Light</button>
            </div>
            <div class="col-xs-6">
                <button data-skins="dark" class="btn-u btn-u-xs btn-u-dark btn-block skins-btn">Dark</button>
            </div>
        </div>

        <hr>

        <!-- Layout Styles -->
        <div class="style-switcher-heading">Layout Styles</div>
        <div class="row no-col-space margin-bottom-20">
            <div class="col-xs-6">
                <a href="javascript:void(0);" class="btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn wide-layout-btn">Wide</a>
            </div>
            <div class="col-xs-6">
                <a href="javascript:void(0);" class="btn-u btn-u-xs btn-u-dark btn-block boxed-layout-btn">Boxed</a>
            </div>
        </div>

        <hr>

        <!-- Theme Type -->
        <div class="style-switcher-heading">Theme Types and Versions</div>
        <div class="row no-col-space margin-bottom-10">
            <div class="col-xs-6">
                <a href="E-Commerce/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">Shop UI <small class="dp-block">Template</small></a>
            </div>
            <div class="col-xs-6">
                <a href="One-Pages/Classic/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">One Page <small class="dp-block">Template</small></a>
            </div>
        </div>

        <div class="row no-col-space">
            <div class="col-xs-6">
                <a href="Blog-Magazine/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">Blog <small class="dp-block">Template</small></a>
            </div>
            <div class="col-xs-6">
                <a href="RTL/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">RTL <small class="dp-block">Version</small></a>
            </div>
        </div>
    </div>
</div><!--/style-switcher-->
<!--=== End Style Switcher ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{url('')}}/preview/akawana/assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="{{url('')}}/preview/akawana/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="{{url('')}}/preview/akawana/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{url('')}}/preview/akawana/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="{{url('')}}/preview/akawana/assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="{{url('')}}/preview/akawana/assets/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="{{url('')}}/preview/akawana/assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="{{url('')}}/preview/akawana/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="{{url('')}}/preview/akawana/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{url('')}}/preview/akawana/assets/js/app.js"></script>
<script type="text/javascript" src="{{url('')}}/preview/akawana/assets/js/plugins/owl-carousel.js"></script>
<script type="text/javascript" src="{{url('')}}/preview/akawana/assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript" src="{{url('')}}/preview/akawana/assets/js/plugins/parallax-slider.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        OwlCarousel.initOwlCarousel();
        StyleSwitcher.initStyleSwitcher();
        ParallaxSlider.initParallaxSlider();
    });
</script>
<!--[if lt IE 9]>
<script src="{{url('')}}/preview/akawana/assets/plugins/respond.js"></script>
<script src="{{url('')}}/preview/akawana/assets/plugins/html5shiv.js"></script>
<script src="{{url('')}}/preview/akawana/assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
</body>
</html>
