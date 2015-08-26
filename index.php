<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

 <div class="lc-single">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header class="post-header">
				<h1 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
				<p class="post-timestamp"><?php the_time('F j, Y'); ?></p>
			</header>

			<div class="post-content text">
				<?php the_content(); ?>
			</div>
		</article>

	<?php endwhile; ?>

	<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>
</div>
<?php get_footer(); ?>
