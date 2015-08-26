<section class="section section-touts">
	<div class="g g-4up">
		<?php 
			if( have_rows('touts') ):
			while ( have_rows('touts') ) : the_row(); 
		?> 
		<div class="gi">
			<?php include (TEMPLATEPATH . '/includes/block-tout.php');  ?>
		</div>
		<?php 
		    endwhile;
		    endif;
		?>
	</div>
</section>