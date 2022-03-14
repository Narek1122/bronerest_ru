
<!DOCTYPE html>
<html lang="en">
    {{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<head>

  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href=" {{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href=" {{ asset('assets/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  @yield('title')

 
  <title>  {{$title  ?? " "}} </title>
  
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href=" {{ asset('assets/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href=" {{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
  @yield('header-links')
  @yield('header-scripts')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('assets/img/sidebar-1.jpg') }}">
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Retoran name ?
        </a></div>
      <div class="sidebar-wrapper">

        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href=" {{ asset('')}}">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
              <i class="material-icons">image</i>
              <p> Pages
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/pages/pricing.html') }}">
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Pricing </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/pages/rtl.html') }}">
                    <span class="sidebar-mini"> RS </span>
                    <span class="sidebar-normal"> RTL Support </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/pages/timeline.html') }}">
                    <span class="sidebar-mini"> T </span>
                    <span class="sidebar-normal"> Timeline </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/pages/login.html') }}">
                    <span class="sidebar-mini"> LP </span>
                    <span class="sidebar-normal"> Login Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/pages/register.html') }}">
                    <span class="sidebar-mini"> RP </span>
                    <span class="sidebar-normal"> Register Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/pages/lock.html') }}">
                    <span class="sidebar-mini"> LSP </span>
                    <span class="sidebar-normal"> Lock Screen Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/pages/user.html') }}">
                    <span class="sidebar-mini"> UP </span>
                    <span class="sidebar-normal"> User Profile </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/pages/error.html') }}">
                    <span class="sidebar-mini"> E </span>
                    <span class="sidebar-normal"> Error Page </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
              <i class="material-icons">apps</i>
              <p> Components
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" data-toggle="collapse" href="#componentsCollapse">
                    <span class="sidebar-mini"> MLT </span>
                    <span class="sidebar-normal"> Multi Level Collapse
                      <b class="caret"></b>
                    </span>
                  </a>
                  <div class="collapse" id="componentsCollapse">
                    <ul class="nav">
                      <li class="nav-item ">
                        <a class="nav-link" href="#0">
                          <span class="sidebar-mini"> E </span>
                          <span class="sidebar-normal"> Example </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/components/buttons.html') }}">
                    <span class="sidebar-mini"> B </span>
                    <span class="sidebar-normal"> Buttons </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/components/grid.html') }}">
                    <span class="sidebar-mini"> GS </span>
                    <span class="sidebar-normal"> Grid System </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/components/panels.html') }}">
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Panels </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/components/sweet-alert.html') }}">
                    <span class="sidebar-mini"> SA </span>
                    <span class="sidebar-normal"> Sweet Alert </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/components/notifications.html') }}">
                    <span class="sidebar-mini"> N </span>
                    <span class="sidebar-normal"> Notifications </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/components/icons.html') }}">
                    <span class="sidebar-mini"> I </span>
                    <span class="sidebar-normal"> Icons </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/components/typography.html') }}">
                    <span class="sidebar-mini"> T </span>
                    <span class="sidebar-normal"> Typography </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#formsExamples">
              <i class="material-icons">content_paste</i>
              <p> Forms
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="formsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/forms/regular.html') }}">
                    <span class="sidebar-mini"> RF </span>
                    <span class="sidebar-normal"> Regular Forms </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/forms/extended.html') }}">
                    <span class="sidebar-mini"> EF </span>
                    <span class="sidebar-normal"> Extended Forms </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/forms/validation.html') }}">
                    <span class="sidebar-mini"> VF </span>
                    <span class="sidebar-normal"> Validation Forms </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/forms/wizard.html') }}">
                    <span class="sidebar-mini"> W </span>
                    <span class="sidebar-normal"> Wizard </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
              <i class="material-icons">grid_on</i>
              <p>Restoran
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="tablesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('/restran/create') }}">
                    <span class="sidebar-mini"> Craete </span>
                    <span class="sidebar-normal">  Restoran </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('/restran/edit') }}">
                    <span class="sidebar-mini"> Edith </span>
                    <span class="sidebar-normal"> Restoran </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('/restran/show') }}">
                    <span class="sidebar-mini"> Show  </span>
                    <span class="sidebar-normal"> Restoran </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
              <i class="material-icons">place</i>
              <p> Maps
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="mapsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/maps/google.html') }}">
                    <span class="sidebar-mini"> GM </span>
                    <span class="sidebar-normal"> Google Maps </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/maps/fullscreen.html') }}">
                    <span class="sidebar-mini"> FSM </span>
                    <span class="sidebar-normal"> Full Screen Map </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href=" {{ asset('examples/maps/vector.html') }}">
                    <span class="sidebar-mini"> VM </span>
                    <span class="sidebar-normal"> Vector Map </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href=" {{ asset('examples/widgets.html') }}">
              <i class="material-icons">widgets</i>
              <p> Widgets </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href=" {{ asset('/create-floor-plan') }}">
              <i class="material-icons">create</i>
              <p> Create Floor plan </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href=" {{ asset('/edit-floor-plan/5/fff11') }}">
              <i class="material-icons">edit</i>
              <p> Edit Floor plan </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href=" {{ asset('examples/charts.html') }}">
              <i class="material-icons">timeline</i>
              <p> Charts </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href=" {{ asset('examples/calendar.html') }}">
              <i class="material-icons">date_range</i>
              <p> Calendar </p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                  <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                  <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                <div class="ripple-container"></div></button>
              </div>
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
         <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button> -->
          <div class="collapse navbar-collapse justify-content-end">
           <!--  <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form> -->
           <!--  <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li> -->
            <!--   <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"

                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                  >Log out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      @yield('content')
      <footer class="footer">
        <div class="container-fluid">
       <!--    <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav> -->
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://web-ex.tech" target="_blank">Webex_tech</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}"></script>
  {{-- <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script> --}}
  <!-- Plugin for the momentJs  -->
  <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{ asset('assets/js/plugins/sweetalert2.js') }}"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{ asset('assets/js/plugins/jquery.validate.min.js') }}"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{ asset('assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{ asset('assets/js/plugins/bootstrap-selectpicker.js') }}"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{ asset('assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ asset('assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{ asset('assets/js/plugins/fullcalendar.min.js') }}"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{ asset('assets/js/plugins/jquery-jvectormap.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js') }}"></script> --}}
  <!-- Library for adding dinamically elements -->
  <script src="{{ asset('assets/js/plugins/arrive.min.js') }}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{ asset('assets/js/plugins/chartist.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js/material-dashboard.js?v=2.1.2') }}" type="text/javascript"></script>
  {{-- <script src="{{ asset('assets/js/material-dashboard.min.js?v=2.2.2') }}" type="text/javascript"></script> --}}
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('assets/demo/demo.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
@yield('scripts')

</body>
</html>
