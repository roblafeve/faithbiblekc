jQuery(document).ready(function( $ ) {

// Remove Address Bar

	window.addEventListener("load",function() {
	  // Set a timeout...
	  setTimeout(function(){
	    // Hide the address bar!
	    window.scrollTo(0, 0);
	  }, 0);
	});
	
// Mobile Sliding Menu

	$('#mobile-menu-toggle').click(function(e) {
		$('#page-position').toggleClass('menu-open');
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