<?php /* Template Name: About */ ?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
