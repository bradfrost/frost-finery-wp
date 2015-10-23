<?php /* Template Name: About */ ?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php include (TEMPLATEPATH . '/includes/block-hero.php');  ?>

		<section>
			<div class="lc-single">
				<?php the_field('process_title'); ?>

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
			{{# thanks }}
			{{> molecules-block-hero-text }}
			{{/ thanks }}
		</section>



		<div class="g g-2up">
			<div class="gi">
				<?php $image = get_field('about_img'); ?>
				<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
			</div>
			<div class="gi">
				<h1><?php the_field('about_title'); ?></h1>
				<div class="text">
				<?php the_field('about_content'); ?>
				</div>
			</div>
		</div>
		<div class="g g-2up">
			<div class="gi">
				<h2 class="alpha"><?php the_field('process_title'); ?></h2>
				<div class="text">
				<?php the_field('process_content'); ?>
				</div>
			</div>
			<div class="gi">
				<h2 class="alpha"><?php the_field('thanks_title'); ?></h2>
				<div class="text">
				<?php the_field('thanks_content'); ?>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
