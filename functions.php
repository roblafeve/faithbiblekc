<?php 
global $theme_dir;
$theme_dir = get_stylesheet_directory_uri();

global $site_url;
$site_url = site_url();

//  ----------------------------------------------//
//  ====  REGISTER MENU AND FALLBACK  ------------//
//  ----------------------------------------------//
if ( function_exists( 'register_nav_menu' ) ) {
		register_nav_menu( 'primary', 'Primary Menu' );
	}

function faithbiblekc_page_menu() {
	global $site_url;
?>
	<ul>  
    <li><a class="active" href="<?php echo $site_url; ?>/">Home</a></li>
    <li><a href="<?php echo $site_url; ?>/ministries">Ministries</a></li>
    <li><a href="<?php echo $site_url; ?>/sermons">Sermons</a></li>
  	<li><a href="<?php echo $site_url; ?>/doctrine">Doctrine</a></li>
  	<li><a href="<?php echo $site_url; ?>/leadership">Leadership</a></li>
  	<li><a href="<?php echo $site_url; ?>/contact">Contact</a></li>
	</ul>
<?php }

?>