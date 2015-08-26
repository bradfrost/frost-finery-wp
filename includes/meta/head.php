<head id="<?php echo of_get_option('meta_headid'); ?>">

	<meta charset="<?php bloginfo('charset'); ?>">
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	
	<meta name="viewport" content="width=device-width" />

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>" />


	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
	
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
	<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
	<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
	
	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="http://frostfinery.com">
	<meta name="twitter:title" content="<?php bloginfo('name'); ?>">
	<meta name="twitter:description" content="<?php bloginfo('description'); ?>">
	<meta name="twitter:image" content="http://frostfinery.com/wp-content/uploads/2014/10/hero_stack_hp4.jpg">
	<meta name="twitter:site" content="@frostfinery">
	<meta name="twitter:creator" content="@minifrost">
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>	
	<script src="//use.typekit.net/reh7esz.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<?php wp_head(); ?>

</head>