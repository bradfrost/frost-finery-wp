<div class="block block-hero">
	<?php 
		$link = get_field( "hero_link" );
		if( $link ) : 
	?>
	<a href="<?php the_field('hero_link'); ?>" class="b-inner">
	<?php endif; ?>
		<div class="b-text">
			<h1 class="b-title"><?php the_field('hero_title'); ?></h1>
			<p class="b-excerpt"><?php the_field('hero_excerpt'); ?></p>
		</div>
		<?php 
		$value = get_field( "hero_img" );
		if( $value ) : ?>
		<div class="b-thumb">
			<?php $image = get_field('hero_img'); ?>
			<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
		</div>
		<?php endif; ?>
	<?php 
		if( $link ) : 
	?>
	</a>
	<?php endif; ?>
</div>