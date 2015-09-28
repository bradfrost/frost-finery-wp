<div class="events-list-item">
	<a href="<?php the_field('event_url'); ?>">
		<h3><?php the_title(); ?></h3>
		<div class="location">
			<?php the_field('event_street'); ?>
		</div>
		<div class="location">
			<?php the_field('city'); ?>, <?php the_field('state'); ?>
		</div>
		<div class="date">
			 <?php echo date("M", strtotime($date));?> <?php echo date("d", strtotime($date));?><?php if( get_field('event_end_date') ) {echo "-";$endDate = get_field('event_end_date'); echo date("d", strtotime($endDate));}?> <?php echo date("Y", strtotime($date));?>
		</div>
		<div class="time">
			<?php the_field('event_time'); ?>
		</div>
		<div class="description">
			<?php the_field('event_description'); ?>
		</div>
	</a>
</div>
