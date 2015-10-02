<?php /* Template Name: Shop */ ?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="g g-2up">
			<div class="gi">
				<?php $image = get_field('featured_img'); ?>
				<?php $imgClass = get_field('featured_img_flush'); ?>
				<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" <?php if($imgClass=="Flush") { echo 'class="flush"'; } ?>>
			</div>
			<div class="gi">
				<h1><?php the_field('page_title'); ?></h1>
				<div class="text">
				<?php the_field('page_content'); ?>
				</div>
				<a href="<?php the_field('cta_link'); ?>" class="btn">Shop On Etsy</a>
			</div>
		</div>
	<?php endwhile; endif; ?>

		
	<hr class="hr-short" />
	
<div class="event-shops-container">
<!--Begin Upcoming Events-->
	<div class="event-container">
		<?php
		$title = get_field('event_title');
		$excerpt = get_field('event_excerpt');
		$override = true;
	?>
	<?php include (TEMPLATEPATH . '/includes/block-hero.php');  ?>
		<?php
        $args = array( 'numberposts' => -1, 'post_type' => 'events','meta_key' => 'event_start_date', 'orderby' => 'meta_value_num', 'order' => 'ASC' );
        $myposts = get_posts( $args );
        if(sizeof($myposts) != 0): ?>
		<ul class="events-list">
		        <?php foreach ( $myposts as $post ) : setup_postdata( $post );
		       	 $date = get_field('event_start_date');
			   	 if( strtotime($date) >= strtotime('now') ) : //If event is later than or equal to the current date
	        ?>
					<li>
						<?php include (TEMPLATEPATH . '/includes/block-event.php'); ?>
					</li>
				<?php endif; //end future date conditional
			endforeach; //end loop most ?>
		</ul>
		<?php else: ?>
		<div>
			No upcoming events right now
		</div>
		<?php endif;
		wp_reset_postdata(); ?>
		<div class="event-link">
			<a href="/events">See All Upcoming Events</a>
		</div>
	</div>
		
<!--End Upcoming Events-->

	<!--Start Collection-->
	<div class="shop-container">
		<?php
		$title = get_field('shop_title');
		$excerpt = get_field('shop_excerpt');
		$override = true;
	?>
	<?php include (TEMPLATEPATH . '/includes/block-hero.php');  ?>

	<ul class="events-list">
	<?php
		$args = array( 'numberposts' => -1, 'post_type' => 'shops', 'orderby' => 'menu_order',
    'order' => 'ASC' );
        $myposts = get_posts( $args ); ?>
		 <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				
					<li><?php include (TEMPLATEPATH . '/includes/block-shops.php'); ?></li>
		 <?php endforeach; ?>
	</ul>	
	</div>
<!--End Collection-->
</div>

<?php get_footer(); ?>

