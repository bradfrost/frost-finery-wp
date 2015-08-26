<?php /* Template Name: Custom Work */ ?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="g g-2up">
			<div class="gi">
				<?php $image = get_field('featured_img'); ?>
				<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
			</div>
			<div class="gi">
				<h1><?php the_field('page_title'); ?></h1>
				<div class="text">
				<?php the_field('page_content'); ?>
				</div>
			</div>
		</div>
		<hr />
		<?php include (TEMPLATEPATH . '/includes/section-touts.php');  ?>
		<?php /*
		<p class="intro"><?php the_field('blog_intro'); ?></p>
		<?php include (TEMPLATEPATH . '/includes/button-bar.php');  ?>
		*/ ?>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
