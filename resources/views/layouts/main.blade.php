<!DOCTYPE html>
<html>
<head>
<title> Teba </title>
<link rel="stylesheet" href="{{asset('main/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('main/css/bootstrap-select.css')}}">
<link href="{{asset('main/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('main/css/flexslider.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('main/css/font-awesome.min.css')}}" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" type="image/png" href="{{asset('main/images/logo.png')}}"/>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" " />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
     <!-- Owl Stylesheets -->
<link rel="stylesheet" href="{{asset('main/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('main/css/owl.theme.default.min.css')}}">
<!--  -->
<link rel="stylesheet" href="{{asset('main/css/newCss.css')}}" />

</head>
<body>
 <style type="text/css">
.navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand{
  margin-left: 15px;
}
.navbar-brand{
  height: 75px;
}
 </style>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> <img src="{{asset('main/images/logo.png')}}" width="100" height="80">  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!--       <ul class="nav navbar-nav">

      </ul> -->
<style media="screen">
.navbar-nav li:hover > ul.dropdown-menu {
  display: block;
}
.dropdown-submenu {
  position:relative;
}
.dropdown-submenu>.dropdown-menu {
  top:0;
  left:100%;
  margin-top:-6px;
}

/* rotate caret on hover */
.dropdown-menu > li > a:hover:after {
  text-decoration: underline;
  transform: rotate(-90deg);
}
.nav{
  margin-top: 12px;
}
</style>
      <ul class="nav navbar-nav navbar-right">
        <li class=""><a href="/">Home  </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php foreach ($Categories as $key => $value): ?>
              <?php if (count($value->childs)>0): ?>
                <!--  -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{$value->TextTrans('name')}}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php foreach ($value->childs as $key => $child): ?>
                      <li><a class="dropdown-item" href="#">{{$child->TextTrans('name')}}</a></li>
                    <?php endforeach; ?>
                  </ul>
                </li>
                <!--  -->
              @else
              <li><a href="#">{{$value->TextTrans('name')}}   </a></li>

              <?php endif; ?>

            <?php endforeach; ?>
            <!--  -->

            <!--  -->
          </ul>
        </li>
        <li class="active"><a href="/New-Advertising">New Advertising </a></li>


        <li><a href="#">Shops</a></li>
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                      <a href="{{url('/home')}}">Home</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endguest

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

        @yield('content')


        <!--footer section start-->
        <footer>
          <div class="footer-top mobile-app">
            <div class="container">
              <div class="foo-grids">
                <div class="col-md-3 footer-grid">
                  <h4 class="footer-head">Who We Are</h4>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                  <p>The point of using Lorem Ipsum is that it has a more-or-less normal letters, as opposed to using 'Content here.</p>
                </div>
                <div class="col-md-3 footer-grid">
                  <h4 class="footer-head">Help</h4>
                  <ul>
                    <li><a href="howitworks.html">How it Works</a></li>
                    <li><a href="sitemap.html">Sitemap</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="feedback.html">Feedback</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="typography.html">Shortcodes</a></li>
                  </ul>
                </div>
                <div class="col-md-3 footer-grid">
                  <h4 class="footer-head">Information</h4>
                  <ul>
                    <li><a href="regions.html">Locations Map</a></li>
                    <li><a href="terms.html">Terms of Use</a></li>
                    <li><a href="popular-search.html">Popular searches</a></li>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                  </ul>
                </div>
                <div class="col-md-3 footer-grid">
                  <h4 class="footer-head">Contact Us</h4>
                  <span class="hq">Our headquarters</span>
                  <address>
                    <ul class="location">
                      <li><span class="glyphicon glyphicon-map-marker"></span></li>
                      <li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED NIGERIAN ROYALTY</li>
                      <div class="clearfix"></div>
                    </ul>
                    <ul class="location">
                      <li><span class="glyphicon glyphicon-earphone"></span></li>
                      <li>+0 561 111 235</li>
                      <div class="clearfix"></div>
                    </ul>
                    <ul class="location">
                      <li><span class="glyphicon glyphicon-envelope"></span></li>
                      <li><a href="mailto:info@example.com">mail@example.com</a></li>
                      <div class="clearfix"></div>
                    </ul>
                  </address>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="footer-bottom text-center">
          <div class="container">
            <div class="footer-logo">
              <a href="index.html"><span>T</span>eba</a>
            </div>
            <div class="footer-social-icons">
              <ul>
                <li><a class="facebook" href="#"><span>Facebook</span></a></li>
                <li><a class="twitter" href="#"><span>Twitter</span></a></li>
                <li><a class="flickr" href="#"><span>Flickr</span></a></li>
                <li><a class="googleplus" href="#"><span>Google+</span></a></li>
                <li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
              </ul>
            </div>
            <div class="copyrights">
              <p> © 2019 Resale. All Rights Reserved | Design by  <a href="http://Teba.com/"> Teba</a></p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        </footer>
            <!--footer section end-->

            <!-- js -->
            <script type="text/javascript" src="{{asset('main/js/jquery.min.js')}}"></script>
            <!-- js -->
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="{{asset('main/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('main/js/bootstrap-select.js')}}"></script>

            <script type="text/javascript" src="{{asset('main/js/jquery.form.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

          <!--    <script src="js/jquery.uls.data.js"></script>
        <script src="js/jquery.uls.data.utils.js"></script>
        <script src="js/jquery.uls.lcd.js"></script>
        <script src="js/jquery.uls.languagefilter.js"></script>
        <script src="js/jquery.uls.regionfilter.js"></script>
        <script src="js/jquery.uls.core.js"></script>
        <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
        <link href="css/jquery.uls.css" rel="stylesheet"/>
        <link href="css/jquery.uls.grid.css" rel="stylesheet"/>
        <link href="css/jquery.uls.lcd.css" rel="stylesheet"/>

           -->
        <script src="{{asset('main/js/owl.carousel.min.js')}}"></script>
         <script>
                $(document).ready(function() {
                  $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    responsiveClass: true,
                    responsive: {
                      0: {
                        items: 1,
                        nav: true
                      },
                      600: {
                        items: 3,
                        nav: false
                      },
                      1000: {
                        items: 5,
                        nav: true,
                        loop: false,
                        margin: 20
                      }
                    }
                  })
                })
              </script>
                    @yield('js')
    </body>
    </html>
