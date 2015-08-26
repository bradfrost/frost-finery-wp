<?php /* Template Name: Collections */ ?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php include (TEMPLATEPATH . '/includes/block-hero.php');  ?>
		<div class="g g-max4">
			<?php 
				if( have_rows('collection') ):
				while ( have_rows('collection') ) : the_row(); 
			?> 
			<div class="gi">
				<?php 
				$link = get_sub_field( "product_link" );
				if( $link ) : ?>
				<a href="<?php echo $link; ?>">
				<?php endif; ?>
				<?php $image = get_sub_field('product_image'); ?>
				<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
				<?php if( $link ) : ?>
				</a>
				<?php endif; ?>
			</div>
			<?php 
			    endwhile;
			    endif;
			?>
			
		</div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
