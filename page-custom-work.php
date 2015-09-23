<?php /* Template Name: Custom Work */ ?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="g g-2up">
			<div class="gi">
				<?php $image = get_field('featured_img'); ?>
				<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
			</div>
			<div class="gi">
				<h1><?php the_field('page_title'); ?></h1>
				<div class="text">
				<?php the_field('page_content'); ?>
				</div>
				<a href="/contact/#custom-order" class="btn">Request A Custom Order</a>
			</div>
		</div>
		<hr class="hr-short" />
		
	<!-- Start Custom Work Images -->
		<?php
		$title = get_field('custom_work_title');
		$excerpt = get_field('custom_work_excerpt');
		$override = true;
	?>
		<?php include (TEMPLATEPATH . '/includes/block-hero.php');  ?>
	<?php
		$args = array( 'numberposts' => -1, 'post_type' => 'jewelry', 'orderby' => 'menu_order',
    'order' => 'ASC' );
        $myposts = get_posts( $args ); ?>
	<div class="g g-max4 collection-list">
		 <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			 <?php if (get_field('section') === "custom" ): ?>
				<div class="gi">
					<?php include (TEMPLATEPATH . '/includes/block-jewelry.php'); ?>
				</div>
				<?php endif;
		 endforeach; ?>
	</div>	
	<!-- End Custom Work Images -->
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
