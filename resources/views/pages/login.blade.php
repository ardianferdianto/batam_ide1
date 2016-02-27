<!DOCTYPE html>
<html lang="en">
<head>
    <title>ComplaintHub - Login</title>

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
          <form class="login-form">
            <div class="row">
              <div class="input-field col s12 center">
                <i class="material-icons large">map</i>
                <p class="center login-form-text">ComplaintHub</p>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <i class="mdi-social-person-outline prefix"></i>
                <input id="username" type="text">
                <label for="username" class="center-align">Username</label>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <i class="mdi-action-lock-outline prefix"></i>
                <input id="password" type="password">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">          
              <div class="input-field col s12 m12 l12  login-text">
                  <input type="checkbox" id="remember-me" />
                  <label for="remember-me">Remember me</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <a href="{{ url('home') }}" class="btn waves-effect waves-light col s12">Login</a>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6 m6 l6">
                  <p class="margin right-align medium-small"><a href="#!">Forgot password ?</a></p>
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