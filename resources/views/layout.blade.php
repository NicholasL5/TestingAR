<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    
    <meta content="@yield('title')" name="description">
    <meta content="@yield('title')" name="keywords">
    <meta content="PT Indowire Prima Industrindo" name="author">

    <meta property="og:site_name" content="PT Indowire Prima Industrindo">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('title')">
    <meta property="og:type" content="@yield('title')">
    <meta property="og:image" content="/assets/img/backgrounds/about.jpg">
    <meta property="og:url" content="">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="/assets/img/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.min.css">

    <!-- Ionicons CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/ionicons.min.css">

    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/flaticon.min.css">

    <!-- Icomoon CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/icomoon.min.css">

    <!-- Tractor icon CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/tractor-icon.min.css">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/swiper.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/animate.min.css">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/lightgallery.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Revolution Slider CSS -->
    <link rel="stylesheet" href="/assets/revolution/css/settings.css">
    <link rel="stylesheet" href="/assets/revolution/css/navigation.css">
    <link rel="stylesheet" href="/assets/revolution/custom-setting.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="assets/timeline/css/timeline.min.css">
    {{-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"> --}}
    <link rel="stylesheet" href="{{asset('sweetalert/sweetalert2.min.css')}}">
    @yield('customcss')
</head>
<body>
    <!--====================  preloader ====================-->
    <div class="preloader-activate preloader-active">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <img src="/assets/img/preloader.gif" alt="">
            </div>
        </div>
    </div>
    <!--====================  End of preloader  ====================-->
    <!--====================  header area ====================-->
    <div class="header-area header-sticky">
        <div class="header-area__desktop">
            <!--=======  header navigation area  =======-->
            <div class="header-navigation-area">
                <div class="container-fluid container-fluid--cp-60">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-navigation-wrapper">
                                <!-- logo -->
                                <div class="logo">
                                    <a href="/">
                                        <img src="/assets/img/logo/logo-light.png" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!-- header navigation -->
                                <div class="header-navigation border-left border-right">
                                    <div class="header-navigation__nav">
                                        <nav>
                                            <ul>
                                                <li><a href="/">Home</a></li>
                                                <li><a href="/product">Product</a></li>
                                                <li><a href="/strength">Key Strength</a></li>
                                                <li><a href="/career">Career</a></li>
                                                <li><a href="/about">About Us</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div>
                                    <div class="get-quote-button-wrapper">
                                        <a href="/contact">Contact Us <i class="ion-arrow-right-c"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======  End of header navigation area =======-->
        </div>
        <div class="header-area__mobile">
            <!--=======  mobile menu  =======-->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4 col-sm-6 col-5">
                            <!-- logo -->
                            <div class="logo">
                                <a href="/">
                                    <img src="/assets/img/logo/logo-dark.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-7">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content">
                                <div class="social-links d-none d-md-block">
                                    <ul>
                                        <li><a href="//facebook.com" data-tippy="Facebook" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="//twitter.com" data-tippy="Twitter" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="//vimeo.com" data-tippy="Vimeo" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-vimeo"></i></a></li>
                                        <li><a href="//linkedin.com" data-tippy="Linkedin" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-linkedin"></i></a></li>
                                        <li><a href="//skype.com" data-tippy="Skype" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-skype"></i></a></li>
                                    </ul>
                                </div>
                                <div class="mobile-navigation-icon" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======  End of mobile menu  =======-->
        </div>
    </div>
    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid--cp-60">
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-6 col-9">
                        <!-- logo -->
                        <div class="logo">
                            <a href="/">
                                <img src="/assets/img/logo/logo-dark.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-3">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content">
                            <a class="mobile-navigation-close-icon" id="mobile-menu-close-trigger" href="javascript:void(0)">
                                <i class="ion-ios-close-empty"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/product">Product</a></li>
                    <li><a href="/strength">Key Strength</a></li>
                    <li><a href="/career">Career</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->
    <!--====================  End of header area  ====================-->
    @if(Request::is('product'))
        @include('main.product_modal')
    @endif
    @if(!isset($disable_fullpage))
    <div id="fullpage">
    @endif
        @yield('content')

        <div class="footer-area section-space--inner--top--120 dark-bg section fp-auto-height pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-content-wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <!-- footer intro wrapper -->
                                <div class="footer-intro-wrapper">
                                    <div class="footer-logo">
                                        <a href="#">
                                            <img src="/assets/img/logo/logo-light.png" class="img-fluid" alt="" style="height: 40px">
                                        </a>
                                    </div>
                                    <div class="footer-desc">
                                        <img src="/assets/img/certification/isonew.png" class="img-fluid" alt="" style="width: 75%; margin-top: 20px; border-radius: 15px;">
                                        {{-- <div class="img-iso row text-center">
                                            <div class="col px-2">
                                                <img src="/assets/img/certification/iso1.png" alt="">
                                                <p>Cert. No :<br>FM 688522</p>
                                            </div>
                                            <div class="col px-2">
                                                <img src="/assets/img/certification/iso2.png" alt="">
                                                <p>Cert. No :<br>EMS 630862</p>
                                            </div>
                                            <div class="col px-2">
                                                <img src="/assets/img/certification/iso3.png" alt="">
                                                <p>Cert. No :<br>OHS 630863</p>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 fw-mobile col-md-4">
                                <!-- footer widget -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget__title">Product</h4>
                                    <ul class="footer-widget__navigation">
                                        {{-- @foreach($products AS $key => $ftp)
                                        <li><a href="/product#section{{$key+2}}">{{$ftp->name}}</a></li>
                                        @endforeach --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 fw-mobile col-md-4">
                                <!-- footer widget -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget__title">Key Strength</h4>
                                    <ul class="footer-widget__navigation">
                                        <li><a href="/strength#section1">Why choose Indowire</a></li>
                                        <li><a href="/strength#section2">Product Optimization</a></li>
                                        <li><a href="/strength#section3">Certification</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 fw-mobile col-md-4">
                                <!-- footer widget -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget__title">About Us</h4>
                                    <ul class="footer-widget__navigation">
                                        <li><a href="/about#section1">Business Overview</a></li>
                                        <li><a href="/about#section2">Milestone</a></li>
                                        <li><a href="/about#section3">Vision & Mission</a></li>
                                        <li><a href="/about#section4">Values</a></li>
                                        <li><a href="/about#section5">Company Profile</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <h4 class="footer-widget__title">Get in Touch</h4>
                                <h4 class="mb-3 text-white">PT Indowire Prima Industrindo</h4>
                                <div class="footer-widget__navigation">
                                    <div class="footer-contact row">
                                        <span class="glyph-icon icomoon-placeholder col-1"></span> 
                                        {{-- <p class="col-11">{{$footer->address}}</p> --}}
                                    </div>
                                    <div class="footer-contact row">
                                        <span class="glyph-icon icomoon-envelope col-1"></span> 
                                        {{-- <p class="col-11">{{$footer->email}}</p> --}}
                                    </div>
                                    <div class="footer-contact row">
                                        <span class="glyph-icon icomoon-phone-call col-1"></span> 
                                        {{-- <p class="col-11">{{$footer->phone}}</p> --}}
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright-wrapper">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-copyright-left">
                                    &copy; 2022 PT Indowire Prima Industrindo
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@if(!isset($disable_fullpage))
</div> <!--fullpage end-->
@endif
<!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="ion-android-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!-- JS ============================================ -->

    <!-- Modernizer JS -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="/assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="/assets/js/vendor/bootstrap.min.js"></script>

    <!-- Popper JS -->
    <script src="/assets/js/vendor/popper.min.js"></script>

    <!-- Swiper Slider JS -->
    <script src="/assets/js/plugins/swiper.min.js"></script>

    <!-- Tippy JS -->
    <script src="/assets/js/plugins/tippy.min.js"></script>

    <!-- Light gallery JS -->
    <script src="/assets/js/plugins/lightgallery.min.js"></script>

    <!-- Light gallery video JS -->
    <script src="/assets/js/plugins/lg-video.min.js"></script>

    <!-- Waypoints JS -->
    <script src="/assets/js/plugins/waypoints.min.js"></script>

    <!-- Counter up JS -->
    <script src="/assets/js/plugins/counterup.min.js"></script>

    <!-- Isotope JS -->
    <script src="/assets/js/plugins/isotope.min.js"></script>

    <!-- Appear JS -->
    <script src="/assets/js/plugins/appear.min.js"></script>

    <!-- Gmap3 JS -->
    <script src="/assets/js/plugins/gmap3.min.js"></script>

    <!-- Mailchimp JS -->
    <script src="/assets/js/plugins/mailchimp-ajax-submit.min.js"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <!-- Revolution Slider JS -->
    <script src="/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/assets/revolution/revolution-active.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="assets/timeline/js/timeline.min.js"></script>
    <script type="text/javascript">
        $('.timeline').timeline({
          forceVerticalMode: 800,
          mode: 'horizontal',
          visibleItems: 4
        });
        setInterval(function(){
            $('.timeline-nav-button--next').trigger('click')
        }, 5000);
    </script>
    <script type="text/javascript">
        $('.po-trigger').fancybox({
            afterLoad: function (instance) {
                $('.fancybox-container').addClass('po-box');
                $('.po-box-description').remove();
                $('.fancybox-inner').append(`
                    <div class="po-box-description">
                    ${instance.$trigger.data('desc')}
                    </div>
                `);
            },
            afterShow: function(instance, current) {
                $('.po-box-description').remove();
                $('.fancybox-content').find('.desc-desktop').remove();
                if (instance.$trigger.data('desc') != current.opts.$orig.data('desc')) {
                    $('.fancybox-inner').append(`
                        <div class="po-box-description">
                        ${instance.$trigger.data('desc')}
                    `); 
                    $('.fancybox-content').append(`
                        <p class="desc-desktop">${current.opts.$orig.data('desc')}</p>
                    `);
                }else{
                    $('.fancybox-inner').append(`
                        <div class="po-box-description">
                        ${instance.$trigger.data('desc')}
                        </div>
                    `);
                }
            }

        });
    </script>
    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}
    @if ( Session::get('status') )
        <script>
            alert("{{ Session::get('msg') }}");
        </script>
    @endif
    <script src="{{ asset('sweetalert/sweetalert2.min.js')}}"></script>
    @yield('customscript')
</body>
</html>