<?php
/**
 * Custom ACF functions.
 *
 * A place to custom functionality related to Advanced Custom Fields.
 *
 * @package US Law Shield
 */

// If ACF isn't activated, then bail.
if ( ! class_exists( 'acf' ) ) {
	return false;
}

/**
 * Loop through and output ACF flexible content blocks for the current page.
 */
function ts_usls_display_content_blocks() {
	if ( have_rows( 'content_blocks' ) ) :
		while ( have_rows( 'content_blocks' ) ) :
			the_row();
			get_template_part( 'template-parts/content-blocks/block', get_row_layout() ); // Template part name MUST match layout ID.
		endwhile;
		wp_reset_postdata();
	endif;
}



/**
 * Loop through and output ACF flexible content blocks for the Home page.
 */
function ts_usls_display_content_blocks_hp() {
	if ( have_rows( 'content_blocks' ) ) :
		while ( have_rows( 'content_blocks' ) ) :
			the_row();
			get_template_part( 'template-parts/content-blocks/block', get_row_layout() );
		endwhile;
		wp_reset_postdata();
	endif;
}


/**
 * Loop through and output ACF flexible content blocks for the About Us page.
 */
function ts_usls_display_content_blocks_au() {
	if ( have_rows( 'content_blocks_about' ) ) :
		while ( have_rows( 'content_blocks_about' ) ) :
			the_row();
			get_template_part( 'template-parts/content-blocks/block', get_row_layout() );
		endwhile;
		wp_reset_postdata();
	endif;
}

/**
 * Loop through and output ACF flexible content blocks for the Contact page.
 */
function ts_usls_display_content_blocks_contact() {
	if ( have_rows( 'content_blocks_contact' ) ) :
		while ( have_rows( 'content_blocks_contact' ) ) :
			the_row();
			get_template_part( 'template-parts/content-blocks/block', get_row_layout() );
		endwhile;
		wp_reset_postdata();
	endif;
}

/**
 * Loop through and output ACF flexible content blocks for the Home page.
 */
function ts_usls_display_content_blocks_coverage() {
	if ( have_rows( 'content_blocks' ) ) :
		while ( have_rows( 'content_blocks' ) ) :
			the_row();
			get_template_part( 'template-parts/content-blocks/block', get_row_layout() );
		endwhile;
		wp_reset_postdata();
	endif;
}


/**
 * Loop through and output ACF flexible content blocks for the Education page.
 */
function ts_usls_display_content_blocks_education() {
	if ( have_rows( 'content_blocks_education' ) ) :
		while ( have_rows( 'content_blocks_education' ) ) :
			the_row();
			get_template_part( 'template-parts/content-blocks/block', get_row_layout() );
		endwhile;
		wp_reset_postdata();
	endif;
}


/**
 * Loop through and output ACF flexible content blocks for the Blog pages.
 */
function ts_usls_display_content_blocks_blog() {
	if ( have_rows( 'content_blocks' ) ) :
		while ( have_rows( 'content_blocks' ) ) :
			the_row();
			get_template_part( 'template-parts/content-blocks/block', get_row_layout() );
		endwhile;
		wp_reset_postdata();
	endif;
}


/**
 * Loop through and output ACF flexible content blocks for the Perks page.
 */
function ts_usls_display_content_blocks_perks() {

	if ( have_rows( 'content_blocks_perks_filter' ) ) :
		while ( have_rows( 'content_blocks_perks_filter' ) ) :
			the_row();
			get_template_part( 'template-parts/content-blocks/block', get_row_layout() );
		endwhile;
		wp_reset_postdata();
	endif;
}


/**
 * Loop through and output ACF flexible content blocks for the Videos page.
 */
function ts_usls_display_content_blocks_videos() {

	if ( have_rows( 'content_blocks' ) ) :
		while ( have_rows( 'content_blocks' ) ) :
			the_row();
			get_template_part( 'template-parts/content-blocks/block', get_row_layout() );
		endwhile;
		wp_reset_postdata();
	endif;
}


/**
 * Loop through and output ACF flexible content blocks for the Options page.
 */
function ts_usls_display_optionspage() {

	if ( have_rows( 'options_usls', 'option' ) ) :
		while ( have_rows( 'options_usls', 'option' ) ) : the_row(); ?>
			
				<?php 
				if( get_row_layout() == 'image_title_btn' ): ?>

					<div class="sidebar-block imgttlbtn" style="background-color:<?php the_sub_field('background_color'); ?>">
					
						<?php if (get_sub_field('image', 'option')): ?>
							<img clas="img-side" src="<?php echo get_sub_field('image', 'option'); ?>">	
						<?php endif ?>

						<?php if (get_sub_field('title', 'option')): ?>
							<h3> <?php echo get_sub_field('title', 'option'); ?> </h3>
						<?php endif ?>

						<div class="cont-btn">
							<?php if ( get_sub_field('button_url', 'option') ) : ?>
								<button type="button" class="transition button-usls" onclick="location.href='<?php echo esc_url( get_sub_field('button_url', 'option') ); ?>'"><?php echo esc_html( get_sub_field('button_text', 'option') ); ?></button>
							<?php endif; ?>
						</div>		

					</div>			

				<?php 
		        elseif( get_row_layout() == 'social_media' ):  ?>

		        	<div class="sidebar-block social">

			        	<?php 
						if (get_sub_field('title_social', 'option')): ?>
							<h3> <?php echo get_sub_field('title_social', 'option'); ?> </h3>
						<?php endif; ?>

						<div class="cont-icons">

							<?php 
							if (get_sub_field('facebook_url', 'option')): ?>
								<a target="_blank" class="fb" href="<?php echo get_sub_field('facebook_url', 'option'); ?> ">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							<?php endif;

							if (get_sub_field('twitter_url', 'option')): ?>
								<a target="_blank" class="tw" href="<?php echo get_sub_field('twitter_url', 'option'); ?> ">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
							<?php endif;

							if (get_sub_field('instagram_url', 'option')): ?>
								<a target="_blank" class="ins" href="<?php echo get_sub_field('instagram_url', 'option'); ?> ">
									<img src="<?php echo get_template_directory_uri() . '/assets/images/instagram2.png' ?>">
								</a>
							<?php endif;

							if (get_sub_field('youtube_url', 'option')): ?>
								<a target="_blank" class="yt" href="<?php echo get_sub_field('youtube_url', 'option'); ?> ">
									<i class="fa fa-youtube-play" aria-hidden="true"></i>
								</a>
							<?php endif; ?>

						</div>

					</div>

				<?php 
		        elseif( get_row_layout() == 'newsletter' ):  ?>

		        	<div class="sidebar-block newslet">

			        	<?php if (get_sub_field('heading_newsl', 'option')): ?>
							<h2> <?php echo get_sub_field('heading_newsl', 'option'); ?> </h2>
						<?php endif; ?>

						<?php if (get_sub_field('sub_heading_newsl', 'option')): ?>
							<h3> <?php echo get_sub_field('sub_heading_newsl', 'option'); ?> </h3>
						<?php endif; ?>

						<form class="newsletter-usls" accept-charset="UTF-8" method="post" action="https://go.pardot.com/l/219422/2016-11-28/2xl7">
							<input class="email-form" name="219422_8046pi_219422_8046" id="219422_8046pi_219422_8046-1" value="" class="text" size="30" maxlength="255" placeholder="Email" onkeyup="readyToSubmit();" autocomplete="off" required>
							<input id="submit1" class="transition button-usls" type="submit" accesskey="s" value="SIGN ME UP!" onclick="readyToSubmit();" />
						</form>
					</div>					
			
		    	<?php elseif( get_row_layout() == 'trending_block' ): ?>

					<div class="sidebar-block trending">

						<?php if (get_sub_field('title_trending', 'option')): ?>
							<h3> <?php echo get_sub_field('title_trending', 'option'); ?> </h3>
						<?php endif ?>

						<ul>
							<?php $popular = new WP_Query(array('posts_per_page'=>5, 'meta_key'=>'popular_posts', 'orderby'=>'meta_value_num', 'order'=>'DESC'));
							while ($popular->have_posts()) : $popular->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>"> 
									<div class="date">
										<?php the_time('F jS, Y'); ?> 
									</div>
									<h4>
										<?php the_title(); ?>
									</h4>
								</a>
							</li>
							<?php endwhile; wp_reset_postdata(); ?>
						</ul>

					</div>

				<?php 
		        elseif( get_row_layout() == 'button' ):  ?>

		        	<div class="sidebar-block button">

						<div class="cont-btn">
							<?php if ( get_sub_field('button_url', 'option') ) : ?>
								<button type="button" class="transition button-usls" onclick="location.href='<?php echo esc_url( get_sub_field('button_url', 'option') ); ?>'"><?php echo esc_html( get_sub_field('button_text', 'option') ); ?></button>
							<?php endif; ?>
						</div>		

					</div>	        					

			    <?php endif; ?>

	    <?php 
		endwhile;
		wp_reset_postdata();
	endif;
}



/**
 * Associate the possible block options with the appropriate section.
 *
 * @param  array $args Possible arguments.
 */
function ts_usls_display_block_options( $args = array() ) {

	// Get block background options.
	$background_options = get_sub_field( 'background_options' );

	// Setup defaults.
	$defaults = array(
		'background_type'  => $background_options['background_type']['value'],
		'container'        => 'section',
		'class'            => 'content-block',
	);

	// Parse args.
	$args = wp_parse_args( $args, $defaults );

	$inline_style = '';

	$background_video_markup = '';

	// Only try to get the rest of the settings if the background type is set to anything.
	if ( $args['background_type'] ) {
		if ( 'color' === $args['background_type'] ) {
			$background_color = $background_options['background_color'];
			$inline_style .= 'background-color: ' . $background_color . '; ';
		}

		if ( 'image' === $args['background_type'] ) {
			$background_image = $background_options['background_image'];
			$inline_style .= 'background-image: url(' . esc_url( $background_image['sizes']['full-width'] ) . ');';
			$args['class'] .= ' image-as-background';
		}

		if ( 'none' === $args['background_type'] ) {
			$args['class'] .= ' no-background';
		}
	}

	// Print our block container with options.
	printf( '<%s class="%s" style="%s">', esc_html( $args['container'] ), esc_attr( $args['class'] ), esc_attr( $inline_style ) );

}


/**
 * Get the animate.css classes for an element.
 *
 * @return string $classes Animate.css classes for our element.
 */
function ts_usls_get_animation_class() {

	// Get block other options for our animation data.
	$other_options = get_sub_field( 'other_options' );

	// Get out of here if we don't have other options.
	if ( ! $other_options ) {
		return '';
	}

	// Set up our animation class for the wrapping element.
	$classes = '';

	// If we have an animation set...
	if ( $other_options['animation'] ) {
		$classes = 'animated ' . $other_options['animation'];
	}

	return $classes;
}

/**
 * Enqueues scripts for ACF.
 *
 * @author Corey Collins
 */
function ts_usls_acf_admin_scripts() {

	/**
	 * If WP is in script debug, or we pass ?script_debug in a URL - set debug to true.
	 */
	$debug = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG == true ) || ( isset( $_GET['script_debug'] ) ) ? true : false;

	/**
	 * If we are debugging the site, use a unique version every page load so as to ensure no cache issues.
	 */
	$version = '1.0.0';

	/**
	 * Should we load minified files?
	 */
	$suffix = ( true === $debug ) ? '' : '.min';

	// Enqueue our JS to tweak the color picker swatches.
	wp_enqueue_script( 'usls-admin-acf-scripts', get_template_directory_uri() . '/assets/scripts/admin-acf' . $suffix . '.js', array( 'jquery' ), $version, true );

	// Enqueue our color picker styles.
	wp_enqueue_style( 'usls-admin-acf-styles', get_template_directory_uri() . '/admin-acf-styles.css', null, $version );
}
add_action( 'acf/input/admin_head', 'ts_usls_acf_admin_scripts' );
