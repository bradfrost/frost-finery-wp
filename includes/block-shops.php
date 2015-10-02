<div class="events-list-item">
	<a href="<?php the_field('shop_url'); ?>">
		<h3><?php the_title(); ?></h3>
		<div class="location">
			<?php the_field('shop_address'); ?>
		</div>
		<div class="location">
			<?php the_field('shop_city'); ?>, <?php the_field('shop_state'); ?> <?php the_field('shop_zip'); ?>
		</div>
	</a>
</div>
