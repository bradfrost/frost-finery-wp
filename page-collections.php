<?php /* Template Name: Collections */ ?>
<?php get_header(); ?>
<main role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php include (TEMPLATEPATH . '/includes/block-hero.php');  ?>
	
<!--Start Collection-->
	<?php
		$args = array( 'numberposts' => -1, 'post_type' => 'jewelry', 'orderby' => 'menu_order',
    'order' => 'ASC' );
        $myposts = get_posts( $args ); ?>
	<div class="g g-max4 collection-list">
		 <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			 <?php if (get_field('section') === "collection" ): ?>
				<div class="gi">
					<?php include (TEMPLATEPATH . '/includes/block-jewelry.php'); ?>
				</div>
				<?php endif;
		 endforeach; ?>
	</div>	
<!--End Collection-->
<?php wp_reset_query(); ?>
	
	<hr class="hr-short" />
	
<!-- Start Archives -->	
	<?php
		$title = get_field('archive_title');
		$excerpt = get_field('archive_excerpt');
		$override = true;	
	?>
	
	<?php include (TEMPLATEPATH . '/includes/block-hero.php');  
		$args = array( 'numberposts' => -1, 'post_type' => 'jewelry', 'orderby' => 'menu_order',
    'order' => 'ASC' );
        $myposts = get_posts( $args ); ?>
	<div class="g g-max4 collection-list">
		 <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			 <?php if (get_field('section') === "archive" ): ?>
				<div class="gi">
					<?php include (TEMPLATEPATH . '/includes/block-jewelry.php'); ?>
				</div>
			<?php endif;
		endforeach; ?>
	</div>
<!-- End Archives -->

	<?php endwhile; endif; //end wordpress loop ?>
</main><!--End role=main-->
<?php get_footer(); ?>