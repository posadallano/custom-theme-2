<?php
/**
 * The template used for displaying a our team slider block.
 *
 * @package US Law Shield
 */

// Set up fields.
$ot_title = get_sub_field( 'our_team_title' );
// Start a <container> with possible block options.
ts_usls_display_block_options(
	array(
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'content-block our_team', // Container class.
	)
);

?>
<?php if( have_rows('our_team_members') ): ?>
	<div class="ot-block-title">
	  <h2>
	    <?php echo $ot_title; ?>
	  </h2>
	</div>
	<div class="container-slick">
		<div class="slides">
		<?php while( have_rows('our_team_members') ): the_row();
			// vars
			$image = get_sub_field('ot_member_picture');
			$name = get_sub_field('ot_member_name');
			$role = get_sub_field('member_role');
			$email = get_sub_field('member_email');
			$description = get_sub_field('member_description');
			?>
			<div class="slide" data-fancybox="member" data-src="#hidden-content-<?php echo $i; ?>"> 
				<img src="<?php echo $image;?>" alt="<?php echo $name;?>" />
				<h3> <?php echo $name;?> </h3>
				<h4> <?php echo $role;?> </h4>
				<div class="hide-team" id="hidden-content-<?php echo $i; ?>"> 
					<div class="top-logo"> <img src="<?php echo get_template_directory_uri() ?>/assets/images/popup-logo.png"> </div>
					<div class="row">
						<div class="left-card">
							<img src="<?php echo $image;?>" alt="<?php echo $name;?>" />
							<h3> <?php echo $name;?> </h3>
							<h4> <?php echo $role;?> </h4>					
							<div class="email"> <a href="mailto:<?php echo $email; ?>"> <span> <?php echo $email; ?> </span> </a> </div>
						</div>
						<div class="right-description">
							<div class="description"> <?php echo $description; ?> </div>
						</div>
					</div>
				</div>
			</div>
			<?php $i ++; ?>
		<?php endwhile; ?>
	</div>
</div>
<?php endif; ?>
</section><!-- .generic-content -->
