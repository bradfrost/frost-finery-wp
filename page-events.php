<?php /* Template Name: Events */ ?>
<?php get_header(); ?>
	<div class="gi">
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	        <?php the_content(); ?>
	    <?php endwhile; endif; ?>
	</div>
	
<!--Begin Upcoming Events-->
	<h2 class="alpha section-heading">Upcoming Events</h2>
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
		
<!--End Upcoming Events-->

	<hr class="hr-short" />
	        	
<!--Past Events-->
		<h2 class="alpha section-heading">Past Events</h2>
	<ul class="events-list">
		<?php
	        $args = array( 'numberposts' => -1, 'post_type' => 'events', 'meta_key' => 'event_start_date', 'orderby' => 'meta_value_num', 'order' => 'DESC' );
	        $myposts = get_posts( $args );
	        foreach ( $myposts as $post ) : setup_postdata( $post ); 
	
	        $date = get_field('event_start_date');
	
	        if( strtotime($date) < strtotime('now') ) : //If event is earlier than the current date
	        ?>

		<li>
			<?php include (TEMPLATEPATH . '/includes/block-event.php'); ?>
		</li>
		
		<?php endif; //end previous date conditional
        endforeach; //end loop most
        wp_reset_postdata(); 
        ?>
	</ul>
	
<!-- End Past Events-->

<?php get_footer(); ?>