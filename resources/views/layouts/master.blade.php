<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Blog App</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="../assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">

    <!-- style -->
    <link rel="stylesheet" href="{{asset('template/assets/animate.css/animate.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('template/assets/glyphicons/glyphicons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('template/assets/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('template/assets/material-design-icons/material-design-icons.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('template/assets/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css" />
    <!-- build:css ../assets/styles/app.min.css -->
    <link rel="stylesheet" href="{{asset('template/assets/styles/app.css')}}" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="{{asset('template/assets/styles/font.css')}}" type="text/css" />

</head>
<body>
<div class="app" id="app">

    <!-- ############ LAYOUT START-->

    <!-- aside -->
    <div id="aside" class="app-aside modal fade folded md nav-expand">
        <div class="left navside indigo-900 dk" layout="column">
            <div class="navbar navbar-md no-radius">
                <!-- brand -->
                <a class="navbar-brand">
                    <div ui-include="'../assets/images/logo.svg'"></div>
                    <img src="{{asset('template/assets/images/logo.png')}}" alt="." class="hide">
                    <span class="hidden-folded inline">Blog</span>
                </a>
                <!-- / brand -->
            </div>
            <div flex class="hide-scroll">
                <nav class="scroll nav-active-primary">

                    <ul class="nav" ui-nav>


                        <li>
                            <a href="{{route('dashboard')}}" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe3fc;
                      <span ui-include="'../assets/images/i_0.svg'"></span>
                    </i>
                  </span>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>
                        @if(auth()->user()->is_admin)
                        <li>
                            <a href="{{route('categories.index')}}" >
                  <span class="nav-icon">
                    <i class="material-icons md-24">&#xe8fe;
                      <span ui-include="'../assets/images/i_3.svg'"></span>
                    </i>
                  </span>
                                <span class="nav-text">Categories</span>
                            </a>
                        </li>
@endif


                        <li>
                            @if(auth()->user()->is_admin)
                            <a href="{{route('posts.index')}}" >
                  <span class="nav-icon">
                    <i class="material-icons md-24">&#xe051;
                      <span ui-include="'../assets/images/i_3.svg'"></span>
                    </i>
                  </span>
                                <span class="nav-text">Posts</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('services.index')}}" >
                  <span class="nav-icon">
                    <i class="material-icons md-24">&#xe0b0;
                      <span ui-include="'../assets/images/i_3.svg'"></span>
                    </i>
                  </span>
                                <span class="nav-text">Our Services</span>
                            </a>
                        </li>
                        @else
                            <a href="{{route('user.posts.index')}}" >
                  <span class="nav-icon">
                    <i class="material-icons md-24">&#xe051;
                      <span ui-include="'../assets/images/i_3.svg'"></span>
                    </i>
                  </span>
                                <span class="nav-text">Posts</span>
                            </a>
                            </li>
                            <li>
                                <a href="{{route('user.services.index')}}" >
                  <span class="nav-icon">
                    <i class="material-icons md-24">&#xe0b0;
                      <span ui-include="'../assets/images/i_3.svg'"></span>
                    </i>
                  </span>
                                    <span class="nav-text">Our Services</span>
                                </a>
                            </li>
                        @endif


                        <li>
                            <a href="{{ route('profile.edit') }}" >
                  <span class="nav-icon">
                    <i class="material-icons md-24">&#xe853;
                      <span ui-include="'../assets/images/i_3.svg'"></span>
                    </i>
                  </span>
                                <span class="nav-text">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                  <span class="nav-icon">
                    <i class="material-icons md-24">&#xe566;
                      <span ui-include="'../assets/images/i_3.svg'"></span>
                    </i>
                  </span>
                                <span class="nav-text">LogOut</span>
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                </nav>
            </div>
            <div class="b-t">
                <div class="nav-fold">
                    <a href="profile.html">

                        <span class="clear hidden-folded p-x">
        	      <span class="block _500">{{auth()->user()->name}}</span>
        	      <small class="block text-muted">{{auth()->user()->email}}</small>
        	    </span>
                    </a>
                </div>
            </div>
            <div flex-no-shrink>
                <div ui-include="'../views/blocks/aside.bottom.0.html'"></div>
            </div>
        </div>
    </div>
    <!-- / aside -->

    <!-- content -->
    <div id="content" class="app-content box-shadow-z0" role="main">
        <div class="app-header white box-shadow navbar-md">
            <div class="navbar navbar-toggleable-sm flex-row align-items-center">
                <!-- Open side - Naviation on mobile -->
                <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
                    <i class="material-icons">&#xe5d2;</i>
                </a>
                <!-- / -->

                <!-- Page title - Bind to $state's title -->
                <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

                <!-- navbar collapse -->


                          </div>
        </div>
        <div class="app-footer">
            <div class="p-2 text-xs">
                <div class="pull-right text-muted py-1">
                    &copy; Copyright <strong>Flatkit</strong> <span class="hidden-xs-down">- Built with Love v1.1.3</span>
                    <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
                </div>
                <div class="nav">
                  </div>
            </div>
        </div>
        <div ui-view class="app-body" id="view">

            <!-- ############ PAGE START-->
           @yield('content')

            <!-- ############ PAGE END-->

        </div>
    </div>
    <!-- / -->

    <!-- theme switcher -->

    <!-- / -->
    <!-- ############ LAYOUT END-->

</div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
<script src="{{asset('template/libs/jquery/jquery/dist/jquery.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('template/libs/jquery/tether/dist/js/tether.min.js')}}"></script>
<script src="{{asset('template/libs/jquery/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- core -->
<script src="{{asset('template/libs/jquery/underscore/underscore-min.js')}}"></script>
<script src="{{asset('template/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js')}}"></script>
<script src="{{asset('template/libs/jquery/PACE/pace.min.js')}}"></script>

<script src="{{asset('template/scripts/config.lazyload.js')}}"></script>

<script src="{{asset('template/scripts/palette.js')}}"></script>
<script src="{{asset('template/scripts/ui-load.js')}}"></script>
<script src="{{asset('template/scripts/ui-jp.js')}}"></script>
<script src="{{asset('template/scripts/ui-include.js')}}"></script>
<script src="{{asset('template/scripts/ui-device.js')}}"></script>
<script src="{{asset('template/scripts/ui-form.js')}}"></script>
<script src="{{asset('template/scripts/ui-nav.js')}}"></script>
<script src="{{asset('template/scripts/ui-screenfull.js')}}"></script>
<script src="{{asset('template/scripts/ui-scroll-to.js')}}"></script>
<script src="{{asset('template/scripts/ui-toggle-class.js')}}"></script>

<script src="{{asset('template/scripts/app.js')}}"></script>

<!-- ajax -->
<script src="{{asset('template/libs/jquery/jquery-pjax/jquery.pjax.js')}}"></script>
<script src="{{asset('template/scripts/ajax.js')}}"></script>
<!-- endbuild -->
</body>
</html>
