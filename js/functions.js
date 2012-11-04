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
	
});