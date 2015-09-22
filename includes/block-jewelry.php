<div class="jewelry-item">
	<div class="jewelry-image">
		<a href="#<?php the_ID(); ?>">
			<div class="jewelry-thumb">
				<?php if( have_rows('image') ): // check if the repeater field has rows of data ?>
					
					<?php
					$rows = get_field('image'); // get all the rows
					$first_row = $rows[0]; // get the first row
					$first_row_image = $first_row['image']['id']; // get the sub field value 
					
					// Note
					// $first_row_image = 123 (image ID)
					
					$image = wp_get_attachment_image_src( $first_row_image, 'full' );
					// url = $image[0];
					// width = $image[1];
					// height = $image[2];
					
					?>
					<img src="<?php echo $image[0]; ?>" />
				<?php endif; ?>
			</div>
		</a>
	</div>
	<div class="jewelry-panel" id="<?php the_ID(); ?>">
		<div class="jewelry-panel-image">
				<?php if( have_rows('image') ): // check if the repeater field has rows of data ?>
					<div class="jewelry-gallery">
						<ul>
					<?php while ( have_rows('image') ) : the_row(); // loop through the rows of data ?>
						<li><img src='<?php echo get_sub_field('image')['url']; ?>'></li>
				<?php endwhile; ?>
						</ul>
					</div>
				<?php endif; ?>
		</div>
		<div class="jewelry-info">
			<h2 class="alpha">
				<?php the_title(); ?>
			</h2>
			<p><?php the_field('description'); ?></p>
			<ul>
				<li class="material">
					Material:				
					<?php 
					$field = get_field_object('material');
					$value = $field['value'];
					$choices = $field['choices'];
					$choicesselected = array();

					
					if( $value ): ?>

						<?php foreach( $value as $v ): ?>
							<?php array_push($choicesselected, $choices[ $v ]); ?>
						<?php endforeach; ?>
						<?php $choicesseparator = implode(", ", $choicesselected); ?>
						<?php echo $choicesseparator; ?>

					<?php endif; ?>
				</li>
				<li class="retail">
					Price: $<?php the_field('retail_price'); ?>
				</li>
				<?php if (is_user_logged_in() ) : ?>
				<li class="type">
					Type: <?php the_field('type'); ?>
				</li>
				<li class="bom">
					BOM Price: $<?php the_field('bom_price'); ?>
				</li>
				<li class="inventory">
					Inventory: <?php the_field('inventory'); ?>
				</li>
				<li class="sold">
					# Sold: <?php the_field('number_sold'); ?>
				</li> <?php endif; ?>
			</ul>
			<?php $jewelryurl = get_field('jewelry_url');
			 if ($jewelryurl): ?> 
			 	<a href="<?php the_field('jewelry_url'); ?>" class="btn">Buy On Etsy</a>
		<?php else: ?> 
				<a href="/contact" class="btn">Request A Custom Order</a>
		<?php endif; ?> 
		</div>
	</div>
</div>

