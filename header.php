<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
	<link href="<?php bloginfo( 'template_directory' ); ?>/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/modernizr.custom.31096.js" type="text/javascript"></script>
    <?php wp_head(); ?>
</head>
<body>
  
  <header>
    <a href="<?php echo site_url(); ?>">
      <img class="logo" src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png" alt="Faith Bible Church" />
    </a>
    <div class="search">
      <?php get_search_form(); ?>
    </div>
    <nav>
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
    </nav>
  </header>
	
	<div class="content">