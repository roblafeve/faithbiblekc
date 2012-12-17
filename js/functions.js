jQuery(document).ready(function( $ ) {

	var $mainContent = $("#main"),
		siteUrl = "http://" + top.location.host.toString(),
		url = ''; 
	$(document).delegate("a[href^='"+siteUrl+"']:not([href*=/wp-admin/]):not([href*=/wp-login.php]):not([href$=/feed/])", "click", function() {
		location.hash = this.pathname;
		return false;
	}); 
	$(window).bind('hashchange', function(){
		url = window.location.hash.substring(1); 
		if (!url) {
			return;
		} 
		url = url + " #main > *"; 
		$mainContent.animate({opacity: "1"}).load(url, function() {
			$mainContent.animate({opacity: "1"});
			$('body').removeClass('slide-right');
			$('body').removeClass('slide-left');
		});
	});
	$(window).trigger('hashchange');

// Remove Address Bar

	window.addEventListener("load",function() {
	  // Set a timeout...
	  setTimeout(function(){
		// Hide the address bar!
		window.scrollTo(0, 0);
	  }, 0);
	});
	
// Mobile Sliding Menu

	$('#mobile-menu-toggle-left').click(function(e) {
		$('body').toggleClass('slide-right');
		$('#mobile-menus').addClass('slide-right');
		$('#mobile-menus').removeClass('slide-left');
		e.preventDefault();
	});

	$('#mobile-menu-toggle-right').click(function(e) {
		$('body, #mobile').toggleClass('slide-left');
		$('#mobile-menus').addClass('slide-left');
		$('#mobile-menus').removeClass('slide-right');
		e.preventDefault();
	});

// Create the dropdown base
	$("<select />").appendTo(".sidebar");

// Create default option "Go to..."
	$("<option />", {
	   "selected": "selected",
	   "value"   : "",
	   "text"    : "Filter by..."
	}).appendTo(".sidebar select");

// Populate dropdown with menu items
	$(".sidebar ul li ul li a").each(function() {
		var el = $(this);
		$("<option />", {
			"value"   : el.attr("href"),
			"text"    : el.text()
		}).appendTo(".sidebar select");
	});

	$(".sidebar select").change(function() {
	  window.location = $(this).find("option:selected").val();
	});
	
});