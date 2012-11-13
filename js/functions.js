jQuery(document).ready(function( $ ) {

// Remove Address Bar

	
	
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