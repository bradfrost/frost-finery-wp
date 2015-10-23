<div class="next-event-list-item">
	<a href="/events">
		<h3><?php the_title(); ?></h3>
		<div class="next-event-info">
			<?php the_field('city');?>, <?php the_field('state'); ?> &mdash; <?php echo date("M", strtotime($date));?> <?php echo date("d", strtotime($date));?><?php if( get_field('event_end_date') ) {echo "-";$endDate = get_field('event_end_date'); echo date("d", strtotime($endDate));}?> <?php echo date("Y", strtotime($date));?>
		</div>
	</a>
</div>
