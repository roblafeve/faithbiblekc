jQuery(document).ready(function( $ ) {
	
	$('#mobile-menu-toggle').click(function(e) {
		$('#page-position').toggleClass('menu-open');
		e.preventDefault();
	});
	
});