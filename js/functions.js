jQuery(document).ready(function( $ ) {

	var $mainContent = $("#main-content"),
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
		url = url + " #main-content"; 
		$mainContent.animate({opacity: "1"}).load(url, function() {
			$mainContent.animate({opacity: "1"});
			$('#page-position').removeClass('open-right');
			$('#page-position').removeClass('open-left');
		});
	});
	$(window).trigger('hashchange');

// Remove Address Bar

	window.addEventListener("load",function() {
	  // Set a timeout...
	  setTimeout(function(){
		// Hide the address bar!
		window.scrollTo(0, 1);
	  }, 0);
	});
	
// Mobile Sliding Menu

	$('#mobile-menu-toggle-left').click(function(e) {
		$('#page-position').toggleClass('open-right');
		$('#mobile').addClass('open-right');
		$('#mobile').removeClass('open-left');
		e.preventDefault();
	});

	$('#mobile-menu-toggle-right').click(function(e) {
		$('#page-position, #mobile').toggleClass('open-left');
		$('#mobile').addClass('open-left');
		$('#mobile').removeClass('open-right');
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