<?php
/**
 * The template used for displaying an Accordion.
 *
 * @package US Law Shield
 */

$accordion_title = get_sub_field( 'accordion_heading' );
$accordion_subtitle = get_sub_field( 'accordion_subheading' );
?>

<section class="content-block accordion">
		<?php if (( $accordion_title ) || ( $accordion_subtitle ))  : ?>
			<div class="padding-block">
				<?php if ( $accordion_title ) : ?>
					<div class="accordion-block-subtitle">
					  <h3>
					    <?php echo $accordion_title; ?>
					  </h3>
					</div>
				<?php endif; ?>
				<?php if ( $accordion_subtitle ) : ?>
					<div class="accordion-block-title">
					  <h2>
					    <?php echo $accordion_subtitle; ?>
					  </h2>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	<div class="cont-accordion">
		<?php
		if( have_rows('accordion') ):
			$cont = 1;
		    while ( have_rows('accordion') ) : the_row(); ?>
		        <div class="label-ac"> <i class="transition fa fa-caret-right" aria-hidden="true"></i> <div class="lbl"> <?php the_sub_field('label_accordion');  ?> </div> <span> <?php printf("%02d\n", $cont); ?> </span> </div>
				<?php $background_accordion = get_sub_field('background_accordion');
				if( have_rows('accordion_rows') ): ?>
					<div class="acc-content" style="<?php if ($background_accordion) { ?> background: url('<?php echo $background_accordion; ?>') no-repeat left center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; <?php } ?>">
												
						<?php
					    while ( have_rows('accordion_rows') ) : the_row(); ?>
					    	<?php 
					    		$margin_top = get_sub_field('margin_top'); 
					    		$margin_right = get_sub_field('margin_right'); 
					    		$margin_bottom = get_sub_field('margin_bottom'); 
					    		$margin_left = get_sub_field('margin_left'); 
					    		$background_color = get_sub_field('background_color'); 
					    	?>
						    <?php if( get_sub_field('remove_padding') ){ ?>
							    <?php if ( ($margin_top) || ($margin_right) || ($margin_bottom) || ($margin_left) ) { ?>
									<div class="accordion-row row remove-padding" style="<?php if ($background_color) { ?>background-color: #<?php echo $background_color; ?>; <?php } ?> <?php if ($margin_top) { ?>  margin-top: <?php echo $margin_top . 'px;'; } ?> <?php if ($margin_right) { ?>  margin-right: <?php echo $margin_right . 'px;'; } ?> <?php if ($margin_bottom) { ?>  margin-bottom: <?php echo $margin_bottom . 'px;'; } ?> <?php if ($margin_left) { ?>  margin-left: <?php echo $margin_left . 'px;'; } ?> ">
							    <?php } else { ?>
									<div style="<?php if ($background_color) { ?>background-color: #<?php echo $background_color; ?>; <?php } ?>" class="accordion-row row remove-padding">							    	  			
								<?php } ?>
							<?php } else { ?>
								<?php if ( ($margin_top) || ($margin_right) || ($margin_bottom) || ($margin_left) ) { ?>
									<div class="accordion-row row" style="<?php if ($background_color) { ?>background-color: #<?php echo $background_color; ?>; <?php } ?> <?php if ($margin_top) { ?>  margin-top: <?php echo $margin_top . 'px;'; } ?> <?php if ($margin_right) { ?>  margin-right: <?php echo $margin_right . 'px;'; } ?> <?php if ($margin_bottom) { ?>  margin-bottom: <?php echo $margin_bottom . 'px;'; } ?> <?php if ($margin_left) { ?>  margin-left: <?php echo $margin_left . 'px;'; } ?> "> 
								<?php } else { ?>
									<div style="<?php if ($background_color) { ?>background-color: #<?php echo $background_color; ?>; <?php } ?>" class="accordion-row row">							    	  			
								<?php } ?>
					    	<?php } ?>
						    	<?php
								$count = count(get_sub_field('accordion_columns'));
								if( have_rows('accordion_columns') ):
								    while ( have_rows('accordion_columns') ) : the_row(); 
								    	$align = get_sub_field('text_align');
								    ?>
								    	<?php if ( $count == 1) { ?>
									    	<div class="<?php if ($align) { echo "align-" . $align['value']; } ?> column-acc col-sm-12 col-md-12 col-lg-12">
									    		<?php
												get_template_part( 'template-parts/content-blocks/block', 'accordion_blocks' );
												?>
											</div>
								    	<?php } elseif ( $count == 2) { ?>
									    	<div class="<?php if ($align) { echo "align-" . $align['value']; } ?> column-acc col-sm-12 col-md-6 col-lg-6">
									    		<?php
												get_template_part( 'template-parts/content-blocks/block', 'accordion_blocks' );
												?>
											</div>
								    	<?php } elseif ( $count == 3) { ?>
									    	<div class="<?php if ($align) { echo "align-" . $align['value']; } ?> column-acc col-sm-12 col-md-4 col-lg-4">
									    		<?php
												get_template_part( 'template-parts/content-blocks/block', 'accordion_blocks' );
												?>
											</div>
								    	<?php } ?>
									<?php
								    endwhile;
								endif;
								?>
							</div>
						<?php
					    endwhile;
					    ?>
				    </div>
				<?php
				endif;
			$cont = $cont + 1;
		    endwhile;
		endif;
		?>
	</div>
</section>
