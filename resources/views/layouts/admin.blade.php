<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Panel</title>
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- NProgress -->

    <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->

    <link href="{{ asset('css/green.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->

    <link href="{{ asset('css/prettify.min.css') }}" rel="stylesheet">
    <!-- Select2 -->

    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <!-- Switchery -->

    <link href="{{ asset('css/switchery.min.css') }}" rel="stylesheet">
    <!-- starrr -->

    <link href="{{ asset('css/starrr.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->

    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet">
      <link href="{{ asset('css/bootstrap-select.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->

    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">
    <style media="screen">
      .nav.side-menu>li.active, .nav.side-menu>li.current-page{
            border-right: 6px solid #1ABB9C;
      }
    </style>
        @yield('csscontent')
    <!-- Styles -->

</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"> <span>Tyba</span></a>
          </div>

          <div class="clearfix"></div>


          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="/home"><i class="fa fa-home"></i> Home</a>

                </li>

                <li><a href="/categories"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Category   </a>
                <li><a  ><i class="fa fa-cart-plus" aria-hidden="true"></i> Products <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/products">All  Products </a></li>
                    <li><a href="/wait-products">Products need aprove</a></li>
                    <li><a href="/products-approved">Products approved</a></li>
                    <li><a href="/slider">Products Slider </a></li>
                  </ul>
                </li>
                <!-- <li><a href="/service"><i class="fa fa-star" aria-hidden="true"></i> Clinics Services  </a> -->

                </li>


                </li>
                <li><a href="/Brand"><i class="fa fa-tags" aria-hidden="true"></i> Brand  </a>

                </li>
                <li><a href="/Type"><i class="fa fa-tag" aria-hidden="true"></i>Type  </a>

                </li>

                <!-- <li><a href="/insurance"><i class="fa fa-heart" aria-hidden="true"></i> Insurance  </a>

                </li> -->
                <li><a ><i class="fa fa-inbox" aria-hidden="true"></i> Inpox  <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="\get-contact">Contact Message</a></li>
                    <li><a href="\get-appointment">Appointment Message</a></li>
                  </ul>
                </li>

              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>

          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
  <div class="top_nav">
    <div class="nav_menu">
      <nav>
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li class="">
            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
               Admin
              <span class=" fa fa-angle-down"></span>
            </a>
            <ul class="dropdown-menu dropdown-usermenu pull-right">
              <li><a href="\edit-admin"> Profile</a></li>
              <li>  <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out pull-right"></i>  Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
    </div>
  </div>
  <!-- /top navigation -->


      @yield('content')
      <!-- footer content -->
      <footer style="margin-left:0px;">
        <div class="pull-right">

          Typa Website <span>Made With <i class="fa fa-heart" aria-hidden="true" style="color:red"></i></span> By <a href="mailto:myassar.kaboul@hotmail.com">Myassar Kaboul</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>
    <!-- Scripts -->
    <!-- jQuery -->
     <!-- <script src="js/jquery.min.js"></script> -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

     <!-- Bootstrap -->

     <script src="{{ asset('js/bootstrap.min.js') }}"></script>
     <!-- FastClick -->

     <script src="js/fastclick.js"></script>
     <!-- NProgress -->

     <script src="{{ asset('js/nprogress.js') }}"></script>
     <!-- bootstrap-progressbar -->

     <script src="{{ asset('js/bootstrap-progressbar.min.js') }}"></script>
     <!-- iCheck -->

     <script src="{{ asset('js/icheck.min.js') }}"></script>
     <!-- bootstrap-daterangepicker -->

     <script src="{{ asset('js/moment.min.js') }}"></script>

     <script src="{{ asset('js/daterangepicker.js') }}"></script>
     <!-- bootstrap-wysiwyg -->
     <!-- <script type="text/javascript" src="https://cloud.tinymce.com/dev/tinymce.min.js?apiKey=ns01okpy2qb1wywnpuiiybo531p5lja1i2fosbxrsm7yohvq"></script> -->

     <!-- <script src="{{ asset('js/tinymce_4.7.4.js') }}"></script> -->
     <!-- <script src="{{ asset('js/tinymce.js') }}"></script> -->
     <script src="{{ asset('js/jquery.hotkeys.js') }}"></script>

     <script src="{{ asset('js/prettify.js') }}"></script>
     <!-- jQuery Tags Input -->

     <script src="{{ asset('js/jquery.tagsinput.js') }}"></script>
     <!-- Switchery -->

     <script src="{{ asset('js/switchery.min.js') }}"></script>
     <!-- Select2 -->

     <script src="{{ asset('js/select2.full.min.js') }}"></script>
     <!-- Parsley -->

     <script src="{{ asset('js/parsley.min.js') }}"></script>
     <!-- Autosize -->

     <script src="{{ asset('js/autosize.min.js') }}"></script>
     <!-- jQuery autocomplete -->

     <script src="{{ asset('js/jquery.autocomplete.min.js') }}"></script>
     <!-- starrr -->

     <script src="{{ asset('js/starrr.js') }}"></script>
     <!-- Custom Theme Scripts -->

     <script src="{{ asset('js/custom.js') }}"></script>

     <script src="{{ asset('js/sweetalert2.all.js') }}"></script>

     <script src="{{ asset('js/bootstrap-select.js') }}"></script>
     <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
 @if (\Session::get('success'))
 <p id="successmessage" style="Display:none;">{{ \Session::get('success') }}</p>
 <script type="text/javascript">
 function restorealert(){

 var successtext1=document.getElementById('successmessage').textContent;

 swal("success", successtext1, "success");

 };
 restorealert();
 </script>

 @endif

 @if (\Session::get('failed'))
 <p id="failedmessage" style="Display:none;">{{ \Session::get('failed') }}</p>
 <script type="text/javascript">
 function restorealert(){

 var failedtext1=document.getElementById('failedssmessage').textContent;

 swal("Oops...", successtext1, "error");

 };
 restorealert();
 </script>

 @endif
 @if (\Session::get('wrong'))
 <p id="wrongmessage" style="Display:none;">{{ \Session::get('wrong') }}</p>
 <script type="text/javascript">
 function restorealert(){

 var text1=document.getElementById('wrongmessage').textContent;

 swal(
   'Oops...',
   wrongtext1 ,
   'error'
 )


 };
 restorealert();
 </script>

 @endif
 <!-- <script type="text/javascript">
  document.querySelector('.deleteform').addEventListener('submit', function(e) {
    var form = this;
    e.preventDefault();

  swal({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    confirmButtonClass: 'btn btn-success',
    cancelButtonClass: 'btn btn-danger',
    buttonsStyling: false,
    reverseButtons: true
  }).then((result) => {
    if (result.value) {
      form.submit();
    // result.dismiss can be 'cancel', 'overlay',
    // 'close', and 'timer'
    } else if (result.dismiss === 'cancel') {
      swal(
        'Cancelled',
        'Your imaginary data is safe :)',
        'error'
      )
    }
  });

  });
  </script> -->

       @yield('jscontent')

</body>
</html>
