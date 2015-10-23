<!doctype html>
<html class="no-js">

<?php include (TEMPLATEPATH . '/includes/meta/head.php');  ?>

<body <?php body_class(); ?>>
	<header class="header" role="banner">
		<div class="lc">
			<h3 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php include (TEMPLATEPATH . '/includes/logo.php'); ?></a></h3>
			<a href="#nav" class="nav-toggle">Menu</a>
			<nav id="nav" class="nav" role="navigation">
				<?php wp_nav_menu( array('menu' => 'primary') ); ?>
			</nav>
		</div>
	</header>

	<main role="main">
