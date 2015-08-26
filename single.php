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

				<footer class="post-footer">
					<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>
					
					<?php the_tags( __('Tags: ','html5reset'), ', ', ''); ?>
				
					<?php posted_on(); ?>
				</footer>

			</div>
			
			<?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>
			
		</article>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
 	</div>

<?php get_footer(); ?>