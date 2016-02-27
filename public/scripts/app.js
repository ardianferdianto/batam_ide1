$(function() {

	"use strict";

	// PRELOADER CONFIG - START
	// Material admin preloader init
	$(window).load(function() {
		setTimeout(function() {
			$('body').addClass('loaded');      
		}, 200);
	});
	// PRELOADER CONFIG - END

	// SIDEBAR CONFIG - START
	// Material admin main left sidebar menu init
	$('.sidebar-collapse').sideNav();

	var leftnav = $(".page-topbar").height();  
	var leftnavHeight = window.innerHeight - leftnav;

	$('.leftside-navigation').height(leftnavHeight).perfectScrollbar({
		suppressScrollX: true
	});
	// SIDEBAR CONFIG - END

});