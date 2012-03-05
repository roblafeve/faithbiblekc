<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
	<link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/reset.css" />
	<link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/modernizr.custom.31096.js" type="text/javascript"></script>
    <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="nav">
      <?php 
      $args = array(
      'theme_location'  => 'primary',
      'menu'            => 'primary', 
      'container'       => false,
      'menu_class'      => '',
      'echo'            => true,
      'fallback_cb'     => 'faithbiblekc_page_menu',
      'items_wrap'      => '<ul>%3$s</ul>',
      'depth'           => 1          	
      );
      wp_nav_menu($args); ?>
    </div>
  </header>
			