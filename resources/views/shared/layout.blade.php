<!doctype html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Petty</title>
    <meta name="description" content="დაკარგული ცხოველების პოვნის სისტემა">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/transitions.css">
    <link rel="stylesheet" href="/css/flags.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/prettyPhoto.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/scrollbar.css">
    <link rel="stylesheet" href="/css/chartist.css">
    <link rel="stylesheet" href="/css/main.css?v=2">
    <link rel="stylesheet" href="/css/color.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  
  
  <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
</head>
<body class="tg-home tg-homeone">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Wrapper Start
    *************************************-->
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
                Header Start
        *************************************-->
        <header id="tg-header" class="tg-header tg-haslayout">
            
            <div class="tg-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           
                            <div class="dropdown tg-themedropdown tg-userdropdown">
                                @if(Auth::check())
                                <a href="javascript:void(0);" id="tg-adminnav" class="tg-btndropdown" data-toggle="dropdown">
                                    <span class="tg-userdp"><img src='http://www.gravatar.com/avatar/{{ md5(Auth::user()->email) }}?size=34' alt="image description"></span>
                                    <span class="tg-name roboto">{{ Auth::user()->firstname .' '.Auth::user()->lastname }}</span>
                                </a>
                                <ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-adminnav">
                                    <li>
                                        <a href="/auth/logout" class="roboto">
                                            <i class="icon-exit"></i>
                                            <span>გასვლა</span>
                                        </a>
                                    </li>
                                </ul>
                                @else 
                                <a href="/auth/login" >
                                    <span class="tg-name roboto">ავტორიზაცია/რეგისტრაცია</span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tg-navigationarea">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <strong class="tg-logo"><a href="/"><h2>PETTY</h2></strong>
                            <a class="tg-btn" href="/create">
                                <i class="icon-bookmark"></i>
                                <span class="roboto">განაცხადე</span>
                            </a>
                            <nav id="tg-nav" class="tg-nav">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                    <ul >
                                        <li class="menu-item">
                                            <a href="javascript:void(0);" class="roboto">მთავარი</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="javascript:void(0);" class="roboto">კონტაქტი</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--************************************
                Header End
        *************************************-->
        
        @yield('content')


    </div>
    <!--************************************
            Wrapper End
    *************************************-->

    <script src="/js/vendor/jquery-library.js"></script>
    <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
  
  <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="/js/tinymce/tinymce.min4bb5.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci"></script>
    <script src="/js/responsivethumbnailgallery.html"></script>
    <script src="/js/jquery.flagstrap.min.js"></script>
    <script src="/js/backgroundstretch.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.vide.min.js"></script>
    <script src="/js/jquery.collapse.js"></script>
    <script src="/js/scrollbar.min.js"></script>
    <script src="/js/chartist.min.html"></script>
    <script src="/js/prettyPhoto.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/countTo.js"></script>
    <script src="/js/appear.js"></script>
    <script src="/js/gmap3.js"></script>
    <script src="/js/main.js"></script>

    @yield('scripts')
</body>

</html>


