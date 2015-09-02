<?php /* Template Name: Events */ ?>
<?php get_header(); ?>
	<div class="gi">
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	        <?php the_content(); ?>
	    <?php endwhile; endif; ?>
	</div>

	
	<!--Upcoming Events-->
	<h2 class="list-title">Upcoming Events</h2>
	<table caption="Upcoming Events" summary="Frost Finery's Upcoming Events">
	    <thead>
	        <tr>
	            <th id="itemcolumn" scope="col">Event</th>
	            <th id="col1" scope="col">Location</th>
	            <th id="col2" scope="col">Date</th>
	            <th id="col3" scope="col">Time</th>
	        </tr>
	    </thead>
	    <tbody>
	        <?php
	        $args = array( 'numberposts' => -1, 'post_type' => 'events', 'orderby' => 'meta_value_num',
	    'order' => 'ASC' );
	        $myposts = get_posts( $args );
	        foreach ( $myposts as $post ) : setup_postdata( $post ); 
	
	        $date = get_field('event_start_date');
	        $time = get_field('event_time');
	        $image = get_field('event_image');
	        
	        if( strtotime($date) >= strtotime('now') ) :
	        ?>
	        <tr>
	                <th scope="row"><a href="<?php the_field('event_url'); ?>"><?php the_title(); ?></a></th>
	                <td><?php the_field('event_location'); ?></td>
	                <td>
	                    <time>
	                        <?php echo date("M", strtotime($date));?> <?php echo date("d", strtotime($date));?><?php if( get_field('event_end_date') ) {echo "-";$endDate = get_field('event_end_date'); echo date("d", strtotime($endDate));}?> 
	                        <?php echo date("Y", strtotime($date));?>
	                    </time>
	                </td>
	                <td><?php the_field('event_time'); ?></td>
			<?php if( get_field('event_image') ) { ?><td><img src=" <?php the_field('event_image'); ?>" /></td><?php } ?>
	        </tr>
			<?php 
				endif; //end future date conditional
				endforeach; //end loop most ?>
	    </tbody>
	</table> 
	<!--End Upcoming Events-->
	
	<!--Past Events-->
	<h2 class="list-title">Past Events</h2>
	<table caption="Past Events" summary="Frost Finery's Past Events">
	    <thead>
	        <tr>
	            <th id="itemcolumn" scope="col">Event</th>
	            <th id="col1" scope="col">Location</th>
	            <th id="col2" scope="col">Date</th>
	            <th id="col2" scope="col">Time</th>
	        </tr>
	    </thead>
	    <tbody>
	        <?php
	
	
	        $args = array( 'numberposts' => -1, 'post_type' => 'events', 'orderby' => 'meta_value_num',
	    'order' => 'DESC' );
	        $myposts = get_posts( $args );
	        foreach ( $myposts as $post ) : setup_postdata( $post ); 
	
	        $date = get_field('event_start_date');
	
	        if( strtotime($date) < strtotime('now') ) : //If event is earlier than the current date
	
	        ?>
	
	            <tr>
	                <th scope="row"><a href="<?php the_field('url'); ?>"><?php the_title(); ?></a></th>
	                <td><?php the_field('event_location'); ?></td>
	                <td>
	                    <time> 
	                        <?php $date = get_field('event_start_date'); echo date("M", strtotime($date)); echo "&nbsp;".date("d", strtotime($date));?><?php if( get_field('event_end_date') ) { echo "-"; $endDate = get_field('event_end_date'); echo date("d", strtotime($endDate)); }?>
	                        <?php echo date("Y", strtotime($date));?>
	                    </time>
	                </td>
	                <td><?php the_field('event_time'); ?></td>
	            </tr>
	
	        <?php 
	        endif; //end future date conditional
	        endforeach; //end loop most
	        wp_reset_postdata(); 
	        ?>
	    </tbody>
	</table>
<!--End Past Speaking Events-->

<?php get_footer(); ?>