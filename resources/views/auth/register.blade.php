<!DOCTYPE html>
<html lang="en">
<head>
    <title>ComplaintHub - Register</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- SELF-HOSTING MATERIAL ICONS -->
    <link href="{{ url('themes/material_admin/css/materialize.icons.css') }}" type="text/css" rel="stylesheet">
    
    <!-- MATERIAL ADMIN - CORE CSS-->    
    <link href="{{ url('themes/material_admin/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ url('themes/material_admin/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ url('themes/material_admin/css/page-center.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body class="blue">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <div id="login-page" class="row">
        <div class="col s12 z-depth-4 card-panel">
          <form class="login-form" role="form" method="POST" action="{{ url('/register') }}">
            {!! csrf_field() !!}
            <div class="row">
              <div class="input-field col s12 center">
                <i class="material-icons large">map</i>
                <p class="center login-form-text">ComplaintHub</p>
                <p class="center login-form-text grey-text">Register</p>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <i class="mdi-social-person-outline prefix"></i>
                <input id="name" type="text" name="name" value="{{ old('name') }}" class="{{ $errors->has('name') ? ' invalid' : '' }}" required>
                <label for="name" class="center-align">Username</label>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <i class="mdi-communication-email prefix"></i>
                <input id="email" type="email" name="email" value="{{ old('email') }}" class="{{ $errors->has('email') ? ' invalid' : '' }}" required>
                <label for="email" class="center-align">E-mail address</label>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <i class="mdi-action-lock-outline prefix"></i>
                <input id="password" type="password" name="password" class="{{ $errors->has('password') ? ' invalid' : '' }}" required>
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <i class="mdi-action-lock-outline prefix"></i>
                <input id="password_confirmation" type="password" name="password_confirmation" class="{{ $errors->has('password_confirmation') ? ' invalid' : '' }}" required>
                <label for="password_confirmation">Password Confirmation</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <button class="btn yellow darken-3 waves-effect waves-light col s12" type="submit">Register Now</button>
              </div>
              <div class="input-field col s12">
                <p class="margin center medium-small sign-up">Already have an account? <a href="{{ url('login') }}">Login</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ url('themes/material_admin/js/jquery.min.js') }}"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="{{ url('themes/material_admin/js/materialize.min.js') }}"></script>
    <!-- login.js - custom js codes goes here -->
    <script type="text/javascript" src="{{ url('scripts/login.js') }}"></script>
</body>
</html>