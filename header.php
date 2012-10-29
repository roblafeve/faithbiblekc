<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/styles.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cssrefresh.js"></script>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<div class='outer'>
				<div class='inner'>
					<div class='logo'><a href='<?php bloginfo('url'); ?>'>Faith Bible Church</a></div>
					<?php wp_nav_menu( array('container' => 'nav','menu' => 'main' )); ?>
				</div>
			</div>
		</header>
		<div id='main'>
			<div class='outer'>
				<div class='inner'>