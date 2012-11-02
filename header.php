<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/styles.css" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cssrefresh.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>
	</head>
	<body>	
		<div id='page-position'>
			<div id='page-wrapper'>
				<div id='header-wrapper'>
					<header>
						<div class='outer'>
							<nav class='inner'>
								<div id='header-logo'><a href='<?php bloginfo('url'); ?>'>Faith Bible Church</a></div>
								<?php wp_nav_menu( array('container' => '','menu' => 'main', 'menu_id' => 'header-menu')); ?>
								<a id='mobile-menu-toggle' class='button' href='#'>i</a>
							</nav>
						</div>
					</header>
				</div>
				<div id='main'>
					<nav id='mobile-menu'>
						<?php wp_nav_menu( array('container' => '','menu' => 'main')); ?>
					</nav>
					<div class='outer'>
						<div class='inner'>