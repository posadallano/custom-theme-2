<?php
/**
 * The template used for displaying a our team slider block.
 *
 * @package US Law Shield
 */

// Set up fields.
$ct_title = get_sub_field( 'contact_title' );
$contact_form_heading = get_sub_field( 'contact_form_heading' );
$contact_hours_heading = get_sub_field( 'contact_hours_heading' );
$contact_phone_heading = get_sub_field( 'contact_phone_heading' );
$mailing_address_heading = get_sub_field( 'mailing_address_heading' );
$mailing_address_information = get_sub_field( 'mailing_address_information' );
$ct_sjortcode = get_sub_field( 'contact_form_shortcode' );
// Start a <container> with possible block options.
ts_usls_display_block_options(
	array(
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'content-block contact', // Container class.
	)
);
?>
	<div class="contact-block-title">
	  <?php if ($ct_title): ?>
		  <h2>
		    <?php echo $ct_title; ?>
		  </h2>
	  <?php endif ?>
	
	</div>
	<div class="row">

		<div class="contact-block-content cb-l no-padding col-xs-12 col-sm-12 col-md-6 col-lg-6">
		  	<h3> <?php echo $contact_form_heading; ?> </h3>
			<form accept-charset="UTF-8" method="post" action="https://go.pardot.com/l/219422/2017-04-27/mdhg" class="form" id="pardot-form" onsubmit="return readyToSubmit();">
				<input name="219422_13629pi_219422_13629" id="219422_13629pi_219422_13629" class="text" size="30" maxlength="255" autocomplete="off" placeholder="Email" type="text">
				<div id="error_for_219422_13629pi_219422_13629"></div>
				<input type="text" name="219422_13631pi_219422_13631" id="219422_13631pi_219422_13631" value="" class="text" size="30" maxlength="40" placeholder="Phone">
				<div id="error_for_219422_13631pi_219422_13631"></div>
				<div class="select-wrapper">
					<p class="form-field How_can_we_help_you_today_ pd-select required">
						<select name="219422_13633pi_219422_13633" id="219422_13633pi_219422_13633" class="select" onchange="validate_dropdown(inputId_Select,missingErrorId_Select,'required');">
							<option value="" selected="selected"></option>
							<option value="81691">Sales Questions/Information</option>
							<option value="81693">Books/Publications</option>
							<option value="81695">Member Services</option>
							<option value="81697">Facility/Gun Range Questions</option>
							<option value="81699">Media</option>
							<option value="81701">Seminars</option>
							<option value="81703">Employment</option>
							<option value="81705">Other</option>
						</select>
					</p>
				</div>
				<div id="error_for_219422_13633pi_219422_13633"></div>
				<textarea name="219422_13635pi_219422_13635" id="219422_13635pi_219422_13635" onchange="" cols="40" rows="10" placeholder="Type your message here" class="standard"></textarea>
				<div id="error_for_219422_13635pi_219422_13635" style="display:none"></div>
				<p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
					<input type="text" name="pi_extra_field" id="pi_extra_field"/>
				</p>
				<!-- forces IE5-8 to correctly submit UTF8 content -->
				<input name="_utf8" type="hidden" value="&#9731;" />
				<input id="submit" type="submit" class="sign-up" accesskey="s" value="Send Message" onclick="">
				<input type="hidden" name="hiddenDependentFields" id="hiddenDependentFields" value="" />
			</form>
		</div>
		<div class="contact-block-content cb-r no-padding col-xs-12 col-sm-12 col-md-6 col-lg-6">

			<div class="contact-info-block">
				<h3><?php echo $contact_phone_heading; ?></h3>
				<?php if( have_rows('contact_phones_information') ): ?>
				<ul class="phones">
							<?php while( have_rows('contact_phones_information') ): the_row();
								// vars
								$phone_label = get_sub_field('phone_label');
								$phone_information = get_sub_field('phone_information');
								?>
								<li class="slide">
									<span><?php echo $phone_label; ?></span>
									<span><?php echo $phone_information; ?></span>
								</li>
							<?php endwhile; ?>
				</ul>
			<?php endif; ?>

			</div>

			<div class="contact-info-block">
				<h3><?php echo $contact_hours_heading; ?></h3>
				<?php if( have_rows('contact_hours_information') ): ?>
				<ul class="hours">
							<?php while( have_rows('contact_hours_information') ): the_row();
								// vars
								$hours_label = get_sub_field('hours_label');
								$hours_info = get_sub_field('hours_info');
								?>
								<li class="">
									<span><?php echo $hours_label; ?></span>
									<span><?php echo $hours_info; ?></span>
								</li>
							<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			</div>
			<div class="contact-info-block">
				<h3><?php echo $mailing_address_heading; ?></h3>
				<?php echo $mailing_address_information; ?>
			</div>

	</div>

</section><!-- .generic-content -->
