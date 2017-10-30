<?php /* Template Name: Collections */ ?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<nav class="c-local-nav">
		<ul class="c-local-nav__list">
			<li class="c-local-nav__item">
				<a href="#minimalist_title" class="c-local-nav__link">Minimalist</a>
			</li>
			<li class="c-local-nav__item">
				<a href="#organic_title" class="c-local-nav__link">Organic</a>
			</li>
			<li class="c-local-nav__item">
				<a href="#pittsburgh_local_title" class="c-local-nav__link">Pittsburgh Local</a>
			</li>
			<li class="c-local-nav__item">
				<a href="#home_title" class="c-local-nav__link">Home</a>
			</li>
			<li class="c-local-nav__item">
				<a href="#archive_title" class="c-local-nav__link">Archives</a>
			</li>
		</ul>
	</nav>

	<!-- Start Minimalist-->
	<?php
			$title = get_field('minimalist_title');
			$excerpt = get_field('minimalist_excerpt');
			$fieldObject = get_field_object('minimalist_title');
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

<!-- Start organic-->
<?php
		$title = get_field('organic_title');
		$excerpt = get_field('organic_excerpt');
		$fieldObject = get_field_object('organic_title');
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

<!-- Start Pittsburgh Local-->
<?php
		$title = get_field('pittsburgh_local_title');
		$excerpt = get_field('pittsburgh_local_excerpt');
		$fieldObject = get_field_object('pittsburgh_local_title');
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
		$fieldObject = get_field_object('home_title');
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
		$fieldObject = get_field_object('archive_title');
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
