<!-- Begin Next Event Post -->
<div class="next-event-container">
		<h2>Next Event:</h2>
		<?php wp_reset_postdata(); ?>
		<?php
        $args = array( 'numberposts' => -1, 'post_type' => 'events','meta_key' => 'event_start_date', 'orderby' => 'meta_value_num', 'order' => 'ASC' );
        $myposts = get_posts( $args );
        $i = 0;
        if(sizeof($myposts) != 0): ?>
		<ul class="events-list">
	        <?php foreach ( $myposts as $post ) : setup_postdata( $post );
	       	 $date = get_field('event_start_date');
		   	 if( strtotime($date) >= strtotime('now') && $i == 0 ) : //If event is later than or equal to the current date
	    ?>
				<li>
					<?php include (TEMPLATEPATH . '/includes/block-next-event.php'); ?>
				</li>
				
			<?php 
				$i++; //Increment counter
				endif; //end future date conditional
				endforeach; //end loop most 
			?>
		</ul>
		<?php else: ?>
		<div>
			No upcoming events right now
		</div>
		<?php endif; ?>
		<div class="footer-event-link">
			<a href="/events">See All Upcoming Events</a>
		</div>
</div>

<!--End Next Event Post-->