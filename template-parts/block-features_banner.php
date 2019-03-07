<?php
/**
 * The template used for displaying a features banner.
 *
 * @package US Law Shield
 */
// Set up fields.
$title = get_sub_field( 'title' );
$button_text = get_sub_field( 'button_text' );
$button_url = get_sub_field( 'button_url' );
$background_image_ft = get_sub_field( 'background_image_ft' );

// Start a <container> with possible block options.
ts_usls_display_block_options(
	array(
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'content-block features-banner', // Container class.
	)
);
?>
	
	<div class="cont-fade">
		<div class="fade-away"></div>
		<div class="cont-features">
			<div class="features-list">
				<?php 
				if( have_rows('features') ):
				    while ( have_rows('features') ) : the_row();
				        $feature = get_sub_field('feature'); 
				        $description = get_sub_field('description'); 
				        if (($feature) || ($description)) { ?>
				        	<div class="feature">
				        		<div class="shape"> 
				        			<div class="contimg">
				        				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/star-icon.png" />
				        			</div>
				        		</div>
				        		<div class="text">
						        	<?php 
							        if ($feature) { ?>
							        	<h2> <?php echo $feature; ?> </h2> 
							        <?php } 
									if ($description) { ?>
							        	<h4> <?php echo $description; ?> </h4> 
							        <?php } ?>
						        </div>
					        </div>
					    <?php } ?>
				    <?php 
				    endwhile;
				endif;
				?>
			</div>
			<?php if( have_rows('offers_button') ): 
				while( have_rows('offers_button') ): the_row(); 
					
					$icon = get_sub_field('icon');
					$button_text_off = get_sub_field('button_text_off');
					$cta_text = get_sub_field('cta_text');
					$button_url_off = get_sub_field('button_url_off');
					?>
					<?php if ( $button_url_off ) : ?>
						<div class="cont-btn-off">
							<button type="button" class="transition" onclick="location.href='<?php echo esc_url( $button_url_off ); ?>'"> <img src="<?php echo ( $icon ); ?>"> <span class="btn-text"> <?php echo esc_html( $button_text_off ); ?> </span> <span class="cta-text"> <?php echo esc_html( $cta_text ); ?> </span> </button>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
				
			<?php endif; ?>
		</div>
		<div class="cont-ctafeat" style="background-image: url(<?php echo $background_image_ft; ?>);">
			<div class="fade-mobile"></div>
			<div class="ctafeatures">
				<div class="title">
					<?php if ( $title ) : ?>
						<?php echo ( $title ); ?>
					<?php endif; ?>
				</div>
				<div class="cont-btn">
					<?php if ( $button_url ) : ?>
						<button type="button" class="transition button-usls" onclick="location.href='<?php echo esc_url( $button_url ); ?>'"><?php echo esc_html( $button_text ); ?></button>
					<?php endif; ?>
				</div>
			</div>
		</div>	
	</div>

</section> 
