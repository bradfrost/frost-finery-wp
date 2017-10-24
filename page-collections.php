<?php /* Template Name: Collections */ ?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!--Start Seasonal Collection-->
<?php
		$title = get_field('seasonal_title');
		$excerpt = get_field('seasonal_excerpt');
		$override = true;
?>
	<?php
		include (TEMPLATEPATH . '/includes/block-hero.php');
		$args = array( 'numberposts' => -1, 'post_type' => 'jewelry', 'orderby' => 'menu_order',
    'order' => 'ASC' );
        $myposts = get_posts( $args ); ?>
	<div class="g g-max4 collection-list">
		 <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			 <?php if (get_field('section') === "seasonal" ): ?>
				<div class="gi">
					<?php include (TEMPLATEPATH . '/includes/block-jewelry.php'); ?>
				</div>
				<?php endif;
		 endforeach; ?>
	</div>
<!--End Seasonal Collection-->
	<?php wp_reset_query(); ?>

<hr class="hr-short" />

	<!-- Start Home -->
	<?php
			$title = get_field('accessories_title');
			$excerpt = get_field('accessories_excerpt');
			$override = true;
		?>

		<?php include (TEMPLATEPATH . '/includes/block-hero.php');
			$args = array( 'numberposts' => -1, 'post_type' => 'jewelry', 'orderby' => 'menu_order',
	    'order' => 'ASC' );
	        $myposts = get_posts( $args ); ?>
		<div class="g g-max4 collection-list">
			 <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				 <?php if (get_field('section') === "accessories" ): ?>
					<div class="gi">
						<?php include (TEMPLATEPATH . '/includes/block-jewelry.php'); ?>
					</div>
				<?php endif;
			endforeach; ?>
		</div>
	<!-- End Home -->

	<?php wp_reset_query(); ?>

		<hr class="hr-short" />

<!-- Start organic-->
<?php
		$title = get_field('organic_title');
		$excerpt = get_field('organic_excerpt');
		$override = true;
	?>

	<?php include (TEMPLATEPATH . '/includes/block-hero.php');
		$args = array( 'numberposts' => -1, 'post_type' => 'jewelry', 'orderby' => 'menu_order',
    'order' => 'ASC' );
        $myposts = get_posts( $args ); ?>
	<div class="g g-max4 collection-list">
		 <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			 <?php if (get_field('section') === "organic" ): ?>
				<div class="gi">
					<?php include (TEMPLATEPATH . '/includes/block-jewelry.php'); ?>
				</div>
			<?php endif;
		endforeach; ?>
	</div>
<!-- End Organic -->

<?php wp_reset_query(); ?>

	<hr class="hr-short" />

<!-- Start Minimalist-->
<?php
		$title = get_field('minimalist_title');
		$excerpt = get_field('minimalist_excerpt');
		$override = true;
	?>

	<?php include (TEMPLATEPATH . '/includes/block-hero.php');
		$args = array( 'numberposts' => -1, 'post_type' => 'jewelry', 'orderby' => 'menu_order',
    'order' => 'ASC' );
        $myposts = get_posts( $args ); ?>
	<div class="g g-max4 collection-list">
		 <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			 <?php if (get_field('section') === "minimalist" ): ?>
				<div class="gi">
					<?php include (TEMPLATEPATH . '/includes/block-jewelry.php'); ?>
				</div>
			<?php endif;
		endforeach; ?>
	</div>
<!-- End Minimalist -->

<?php wp_reset_query(); ?>

	<hr class="hr-short" />

<!-- Start Pittsburgh Local-->
<?php
		$title = get_field('pittsburgh_local_title');
		$excerpt = get_field('pittsburgh_local_excerpt');
		$override = true;
	?>

	<?php include (TEMPLATEPATH . '/includes/block-hero.php');
		$args = array( 'numberposts' => -1, 'post_type' => 'jewelry', 'orderby' => 'menu_order',
    'order' => 'ASC' );
        $myposts = get_posts( $args ); ?>
	<div class="g g-max4 collection-list">
		 <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			 <?php if (get_field('section') === "pittsburgh-local" ): ?>
				<div class="gi">
					<?php include (TEMPLATEPATH . '/includes/block-jewelry.php'); ?>
				</div>
			<?php endif;
		endforeach; ?>
	</div>
<!-- End Pittsburgh Local -->

<?php wp_reset_query(); ?>

	<hr class="hr-short" />

<!-- Start Home -->
<?php
		$title = get_field('home_title');
		$excerpt = get_field('home_excerpt');
		$override = true;
	?>

	<?php include (TEMPLATEPATH . '/includes/block-hero.php');
		$args = array( 'numberposts' => -1, 'post_type' => 'jewelry', 'orderby' => 'menu_order',
    'order' => 'ASC' );
        $myposts = get_posts( $args ); ?>
	<div class="g g-max4 collection-list">
		 <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			 <?php if (get_field('section') === "home" ): ?>
				<div class="gi">
					<?php include (TEMPLATEPATH . '/includes/block-jewelry.php'); ?>
				</div>
			<?php endif;
		endforeach; ?>
	</div>
<!-- End Home -->

<?php wp_reset_query(); ?>

	<hr class="hr-short" />

<!-- Start Archivess -->
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
<?php get_footer(); ?>
