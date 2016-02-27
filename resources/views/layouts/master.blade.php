<!DOCTYPE html>
<html lang="en">
<head>
	<title>ComplaintHub - @yield('title')</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- SELF-HOSTING MATERIAL ICONS -->
    <link href="{{ url('themes/material_admin/css/materialize.icons.css') }}" type="text/css" rel="stylesheet">
    
    <!-- MATERIAL ADMIN - CORE CSS-->    
    <link href="{{ url('themes/material_admin/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ url('themes/material_admin/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- MATERIAL ADMIN - INCLUDED PLUGIN CSS ON THIS PAGE -->    
    <link href="{{ url('themes/material_admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

    <!-- If you have other header element(css, meta, icon, etc), include it here on your specific page -->
    @yield('head')
</head>
<body>
	<!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="red">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper">
                    	<a href="{{ url('/')}}" class="brand-logo darken-1">
                    		<i class="material-icons">map</i> <span>ComplaintHub</span>
                    	</a>
                    </h1>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details grey darken-1">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="{{ url('themes/material_admin/images/avatar.png') }}" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                    </li>
                                    <li><a href="{{ url('logout') }}"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold">
                    	<a href="{{ url('home') }}" class="waves-effect waves-yellow"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
					<li class="no-padding">
						<ul class="collapsible collapsible-accordion">
							<li class="bold">
								<a class="collapsible-header waves-effect waves-yellow"><i class="mdi-action-assignment-ind"></i> User Management</a>
								<div class="collapsible-body">
									<ul>
										<li>
											<a href="{{ url('departments') }}">Departments <span class="badge info green" style="line-height: 1.8; margin-top: 10px;">Ide 1 & 3</span></a>
										</li>
										<li>
											<a href="{{ url('roles') }}">Roles</a>
										</li>
										<li>
											<a href="{{ url('users') }}">Users</a>
										</li>                                        
									</ul>
								</div>
							</li>
						</ul>
					</li>
					<li class="no-padding">
						<ul class="collapsible collapsible-accordion">
							<li class="bold">
								<a class="collapsible-header waves-effect waves-yellow"><i class="mdi-editor-insert-comment"></i> Complaint Management</a>
								<div class="collapsible-body">
									<ul>
										<li>
											<a href="{{ url('categories') }}">Categories</a>
										</li>
										<li>
											<a href="{{ url('locations') }}">Locations</a>
										</li>
										<li>
											<a href="{{ url('complaints') }}">Complaints</a>
										</li>                                        
									</ul>
								</div>
							</li>
						</ul>
					</li>
                    <li class="bold">
                    	<a href="{{ url('reports') }}" class="waves-effect waves-yellow"><i class="mdi-editor-insert-chart"></i> Reports</a>
                    </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating yellow btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">
            	@yield('content')
            </section>
            <!-- END CONTENT -->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->

    <!-- START FOOTER -->
	<footer class="page-footer red">
		<div class="footer-copyright">
			<div class="container">
				<span>Copyright © 2016 <a class="grey-text text-lighten-4" href="#!">Crideo</a> All rights reserved.</span>
			</div>
		</div>
	</footer>
	<!-- END FOOTER -->

	<!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ url('themes/material_admin/js/jquery.min.js') }}"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="{{ url('themes/material_admin/js/materialize.min.js') }}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{ url('themes/material_admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <!-- app.js - custom js codes goes here -->
    <script type="text/javascript" src="{{ url('scripts/app.js') }}"></script>

    <!-- If you have other scripts, include it here on your specific page -->
    @yield('scripts')
</body>
</html>