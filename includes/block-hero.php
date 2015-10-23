<div class="block block-hero">
	<?php 
		$link = get_field( "hero_link" );
		if (!$override) {
			$title = get_field('hero_title');
			$excerpt = get_field('hero_excerpt');
		}
		if( $link ) : 
	?>
	<a href="<?php the_field('hero_link'); ?>" class="b-inner">
	<?php endif; ?>
		<div class="b-text">
			<h1 class="b-title"><?php echo $title; ?></h1>
			<p class="b-excerpt"><?php echo $excerpt; ?></p>
		</div>
		<?php 
		$value = get_field( "hero_img" );
		if( $value ) : ?>
		<div class="b-thumb">
			<?php if( have_rows('hero') ): ?>
			<?php $i = 0; ?>
					<picture>
					  <?php while ( have_rows('hero') ) : the_row(); ?>
						  <?php $rows1 = get_field('hero');
						  $first_row = $rows1[$i];
						  $first_row_image = $first_row['hero_image']['id'];
						  $first_row_boundary = $first_row['hero_boundary'];
						  $size = 'full';
						  $image = wp_get_attachment_image_src( $first_row_image, $size ); ?>
						  <?php if ($i < sizeof($first_row)) : ?>
						    <source media="(min-width: <?php echo $first_row_boundary ?>)" srcset="<?php echo $image[0]; ?>">
						  <?php else : ?>
						    <img src="<?php echo $image[0]; ?>" alt="hero_image">
						  <?php endif ?>
						  <?php $i++ ?>
					  <?php endwhile; ?>
					</picture>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	<?php 
		if( $link ) : 
	?>
	</a>
	<?php endif; ?>
</div>


