<?php
/**
 * The template used for displaying a video block.
 *
 * @package US Law Shield
 */

// Set up fields.
$main_headline = get_sub_field( 'main_headline' );
$main_subheadline = get_sub_field( 'main_subheadline' );
$sub_headline = get_sub_field( 'sub_headline' );
$button_text = get_sub_field( 'button_text' );
$button_url = get_sub_field( 'button_url' );
// Start a <container> with possible block options.
ts_usls_display_block_options(
	array(
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'content-block row video-block', // Container class.
	)
);
?>

<div class="video">
	<div class="">
		<?php if ( $main_headline ) : ?>
			<div class="block-title-video">
				<h2 class="video-headline"><?php echo esc_html( $main_headline ); ?></h2>
			</div>
		<?php endif; ?>
		<?php if ( $main_subheadline ) : ?>
			<div class="block-subtitle">
				<h3 class="video-sub-headline"><?php echo esc_html( $main_subheadline ); ?></h3>
			</div>
		<?php endif; ?>
		<div class="cont-videos">
			<?php
				if( have_rows('videos') ):
				    while ( have_rows('videos') ) : the_row();
				    	$sub_headline = get_sub_field( 'sub_headline' );
				    	$video = get_sub_field( 'youtube_video_id' );
				    	$title = get_sub_field( 'title' );
				    	?>
				    	<div class="col-video col-lg-4 col-md-4 col-sm-12">
				    		<?php if ( $sub_headline ) : ?>
						        <h3> <?php echo ( $sub_headline ); ?> </h3>
						    <?php endif; ?>
						    <?php if ( $video ) : ?>
								<div class="cont-video">
									<iframe width="520" height="390" src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
								</div>
							<?php endif; ?>
					        <?php if ( $title ) : ?>
						        <h4> <?php echo ( $title ); ?> </h4>
						    <?php endif; ?>
				    	</div>
				        <?php
				    endwhile;
				endif;
			?>
		</div>
		<div class="cont-btn">
			<?php if ( $button_url ) : ?>
				<button type="button" class="transition button-usls" onclick="location.href='<?php echo esc_url( $button_url ); ?>'"><?php echo esc_html( $button_text ); ?></button>
			<?php endif; ?>
		</div>
	</div>
</div>
</section><!-- .generic-content -->
