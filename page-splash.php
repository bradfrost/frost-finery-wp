<?php /* Template Name: Splash */ ?>
<?php include (TEMPLATEPATH . '/header-simple.php');  ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="block block-hero">
			<div class="b-text">
				<h1 class="b-title">Opening in November!</h1>
				<p class="b-excerpt">Frost Finery launches here and on Etsy soon the beginning of November. Handmade from the bench to you – Frost Finery jewelry is designed, fabricated, crafted and made shiny just for you here in beautiful Pittsburgh, Pa.</p>
			</div>
			<div class="b-thumb">
				<img src="/wp-content/themes/frostfinery/images/hero-rings.jpg" alt="Frost Finery Stack Rings" />
			</div>
		</div>
		
		<div class="btn-bar">
			<a href="mailto:melissapfrost@gmail.com" class="btn">Contact Frost Finery for Details</a>
		</div>

	<?php endwhile; endif; ?>

<?php include (TEMPLATEPATH . '/footer-simple.php');  ?>
