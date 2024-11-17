
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Registration</title>
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
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                <div ui-include="'../views/blocks/navbar.brand.html'"></div>
            </div>
        </div>

        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b text-sm">
                Sign up
            </div>
            <form name="form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="md-form-group">
                    <input name="name" id="name" type="text" class="md-input" required>
                    <label>Name</label>
            <div class="mt-2">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
                </div>
                <div class="md-form-group">
                    <input type="email" class="md-input"  name="email" id="email" required>
                    <label>Email</label>
                    <div class="mt-2">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="md-form-group">
                    <input type="password" name="password" id="password" class="md-input" required>
                    <label>Password</label>
                    <div class="mt-2">
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="md-form-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="md-input" required>
                    <label>Confirm Password</label>
                    <div class="mt-2">
                        @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div> <a ui-sref="access.signup" href="{{ route('login') }}" class=" underline text-secondary _600">Already registered?</a></div>

                <button type="submit" class="btn primary btn-block p-x-md">REGISTER</button>
            </form>
        </div>


    </div>

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

<script src="{{asset('template/')}}scripts/config.lazyload.js"></script>

<script src="{{asset('template/scripts/palette.js')}}"></script>
<script src="{{asset('template/scripts/ui-load.js')}}"></script>
<script src="{{asset('template/scripts/ui-jp.js')}}"></script>
<script src="{{asset('template/scripts/ui-include.js')}}"></script>
<script src="{{asset('template/scripts/ui-device.js')}}"></script>
<script src="{{asset('template/scripts/ui-form.js')}}"></script>
<script src="{{asset('template/scripts/ui-nav.js')}}"></script>
<script src="{{asset('template/scripts/ui-screenfull.js')}}"></script>
<script src="{{asset('temlate/scripts/ui-scroll-to.js')}}"></script>
<script src="{{asset('temlate/scripts/ui-toggle-class.js')}}"></script>

<script src="{{asset('temlate/scripts/app.js')}}"></script>

<!-- ajax -->
<script src="{{asset('template/libs/jquery/jquery-pjax/jquery.pjax.js')}}"></script>
<script src="{{asset('template/scripts/ajax.js')}}"></script>
<!-- endbuild -->
</body>
</html>
