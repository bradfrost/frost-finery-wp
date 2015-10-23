<div class="block block-tout">
	<a href="<?php the_sub_field('tout_link'); ?>">
		<h4 class="b-eyebrow"><?php the_sub_field('tout_eyebrow'); ?></h4>
		<h3 class="b-title"><?php the_sub_field('tout_title'); ?></h3>
		<?php $image = get_sub_field('tout_img'); ?> 
		<img src="<?php echo $image['sizes']['tout-size']; ?>" alt="<?php echo $image['alt'] ?>">
	</a>
</div>