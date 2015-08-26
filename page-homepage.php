<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php include (TEMPLATEPATH . '/includes/block-hero.php');  ?>
		<hr />
		<?php include (TEMPLATEPATH . '/includes/section-touts.php');  ?>
		<?php include (TEMPLATEPATH . '/includes/button-bar.php');  ?>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
