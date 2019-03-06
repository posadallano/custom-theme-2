<?php
/**
 * The template used for displaying a member banner.
 *
 * @package US Law Shield
 */

// Set up fields.
$team_member_image = get_sub_field( 'team_member_image' );
$member_name = get_sub_field( 'member_name' );
$company = get_sub_field( 'company' );
$role = get_sub_field( 'role' );
$open_quotation_mark = get_sub_field( 'open_quotation_mark' );
$member_quote = get_sub_field( 'member_quote' );
$main_headline = get_sub_field( 'main_headline' );
$background_member = get_sub_field( 'background_member' );
$background_quote = get_sub_field( 'background_quote' );
$top_center_logo = get_sub_field( 'top_center_logo' );
$back_img_mb1 = get_sub_field( 'back_img_mb1' );
$headline_mb1 = get_sub_field( 'headline_mb1' );
$description_mb1 = get_sub_field( 'description_mb1' );
$button_text_mb1 = get_sub_field( 'button_text_mb1' );
$button_url_mb1 = get_sub_field( 'button_url_mb1' );
$back_img_mb2 = get_sub_field( 'back_img_mb2' );
$headline_mb2 = get_sub_field( 'headline_mb2' );
$description_mb2 = get_sub_field( 'description_mb2' );
$button_text_mb2 = get_sub_field( 'button_text_mb2' );
$button_url_mb2 = get_sub_field( 'button_url_mb2' );
?>

<section class="member-content">
	<?php if ($top_center_logo): ?>
		<div class="center-logo">
			<img src="<?php echo $top_center_logo; ?>">
		</div>	
	<?php endif ?>
	<div class="row cont-member-banner">
		<?php if ( $main_headline ) : ?>
			<div class="main-headline">
				<div class="cont-mh">
					<h2 class="member-headline"><?php echo esc_html( $main_headline ); ?></h2>
				</div>
			</div>
		<?php endif; ?>		
		<div class="content-mb">
			<div class="left col-lg-6 col-md-6 col-sm-12">
				<div class="top">
					<div class="member-image">
						
						<?php if ( $team_member_image ) : ?>
							<img src="<?php echo ( $team_member_image ); ?>">
						<?php endif; ?>	
					</div>
					<div class="cont-member">
						<?php if ( $member_name ) : ?>
							<h4 class="member"><?php echo esc_html( $member_name ); ?></h4>
						<?php endif; ?>	
						<?php if ( $company ) : ?>
							<span class="company"><?php echo esc_html( $company ); ?></span>
						<?php endif; ?>	
						<?php if ( $role ) : ?>
							<span class="role"><?php echo esc_html( $role ); ?></span>
						<?php endif; ?>	
					</div>	
				</div>	
				<div class="bottom">
					
					<div class="quotation-mark col-lg-1 col-md-1 col-sm-1">
						<img src="<?php echo $open_quotation_mark; ?>">
					</div>
					<div class="quote col-lg-11 col-md-11 col-sm-11">
						<p> <?php echo $member_quote; ?> </p>
					</div>
				</div>
			</div>
			
			<div class="right col-lg-6 col-md-6 col-sm-12">
				<?php if ($back_img_mb1 || $headline_mb1) { ?>
					<div class="member-benefit" style="background-image: url('<?php echo $back_img_mb1; ?>');">
						<div class="cont-member-b middle-vertical">
							<?php if ($headline_mb1): ?>
								<h2> <?php echo $headline_mb1; ?> </h2>
							<?php endif ?>
							<?php if ($description_mb1): ?>
								<p> <?php echo $description_mb1; ?> </p>
							<?php endif ?>
							<?php if ( $button_url_mb1 ) : ?>
								<div class="cont-btn">
								<button type="button" class="transition button-usls" onclick="location.href='<?php echo esc_url( $button_url_mb1 ); ?>'"><?php echo esc_html( $button_text_mb1 ); ?></button>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php } ?>
				<?php if ($back_img_mb2 || $headline_mb2) { ?>
					<div class="member-benefit" style="background-image: url('<?php echo $back_img_mb2; ?>');">
						<div class="cont-member-b">
							<?php if ($headline_mb2): ?>
								<h2> <?php echo $headline_mb2; ?> </h2>
							<?php endif ?>
							<?php if ($description_mb2): ?>
								<p> <?php echo $description_mb2; ?> </p>
							<?php endif ?>
							<?php if ( $button_url_mb2 ) : ?>
								<div class="cont-btn">
								<button type="button" class="transition button-usls" onclick="location.href='<?php echo esc_url( $button_url_mb2 ); ?>'"><?php echo esc_html( $button_text_mb2 ); ?></button>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>	
	</div>
</section>