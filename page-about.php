<?php /* Template Name: About */ ?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php include (TEMPLATEPATH . '/includes/block-hero.php');  ?>

		<section>
			<div class="lc-single">
				<?php the_field('about_copy'); ?>
			</div>
		</section>
		<hr class="hr-short" />
		<section>
			<?php
				$title = get_field('press_title');
				$excerpt = get_field('press_excerpt');
				$override = true;
			?>

			<?php include (TEMPLATEPATH . '/includes/block-hero.php');  ?>

			<div class="g g-2up">
				<?php if( have_rows('press_content') ): ?>
				<?php while ( have_rows('press_content') ) : the_row(); ?>

					<div class="gi">
						<?php include (TEMPLATEPATH . '/includes/block-press.php'); ?>
					</div>

				<?php endwhile; ?>
				<?php endif; ?>
			</div><!--end g-2up-->
		</section>

		<hr class="hr-short" />

		<section>
			<?php
				$title = get_field('thanks_title');
				$excerpt = get_field('thanks_excerpt');
				$override = true;
			?>

			<?php include (TEMPLATEPATH . '/includes/block-hero.php');  ?>

			<ul class="col-list" style="text-align: center;">
				<?php if( have_rows('thanks_item') ): ?>
				<?php while ( have_rows('thanks_item') ) : the_row(); ?>

					<li>
						<a href="<?php the_sub_field('thanks_link') ?>"><?php echo the_sub_field('thanks_name'); ?></a>
					</li>

				<?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
