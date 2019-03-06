<?php 
/**
 * The template used for displaying an Accordion Blocks.
 *
 * @package US Law Shield
 */

	if( have_rows('accordion_blocks') ):
	    while ( have_rows('accordion_blocks') ) : the_row();
			// Set up fields.
			$title_h1 = get_sub_field( 'title_h1' );
			$title_h2 = get_sub_field( 'title_h2' );
			$title_h3 = get_sub_field( 'title_h3' );
			$list_title = get_sub_field( 'list_title' );
			$paragraph = get_sub_field( 'paragraph' );
			$image = get_sub_field( 'image' );
			$video = get_sub_field( 'youtube_video_id' );
			$button_text = get_sub_field( 'button_text' );
			$button_url = get_sub_field( 'button_url' );
			$align = get_sub_field('text_align');
	        if( get_row_layout() == 'title_h1' ): ?>
	        	<h1 class="align-<?php echo $align['value'] ?>"> <?php echo esc_html( $title_h1 ); ?> </h1>
			
			<?php
	        elseif( get_row_layout() == 'title_h2' ): ?>
	        	<h2> <?php echo esc_html( $title_h2 ); ?> </h2>
	        <?php 
	        elseif( get_row_layout() == 'title_h3' ): ?>
	        	<h3> <?php echo esc_html( $title_h3 ); ?> </h3>
	        <?php 
	        elseif( get_row_layout() == 'list_title' ): ?>
	        	<h4> <i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo esc_html( $list_title ); ?> </h4>	
	        <?php 
	        elseif( get_row_layout() == 'paragraph' ): ?>

	        	<div class="cont-paragraph align-<?php echo $align['value'] ?>">
	        		<?php echo ( $paragraph );  ?>
	        	</div>
	        <?php 
	        elseif( get_row_layout() == 'image' ): ?>
	        	<img src="<?php echo ( $image ); ?>">
	        <?php 
	        elseif( get_row_layout() == 'image_text' ): ?>
	        	<div class="row image_text">
	        		
	        		<?php if ($image): ?>
		        		<div class="colimg col-sm-12 col-md-3 col-lg-2">
		        			<img src="<?php echo $image; ?>">
		        		</div>
	        		<?php endif ?>
	        		
	        		<div class="coltxt col-sm-12 col-md-9 col-lg-10">
	        			<?php if ($title_h2): ?>
	        				<h2> <?php echo esc_html( $title_h2 ); ?> </h2>	
	        			<?php endif ?>
	        			<?php if ($paragraph): ?>
	        				<p><?php echo $paragraph; ?></p>
	        			<?php endif ?>
	        		</div>
	        	</div>
	        <?php 
	        elseif( get_row_layout() == 'video' ): ?>
				<div class="cont-video">
	        		<iframe width="520" height="390" src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
	        	</div>	   
			<?php 
	        elseif( get_row_layout() == 'pdf' ): ?>
				<?php
				if( have_rows('pdf_repeater') ): ?>
					<div class="cont-pdf">
						<?php 
					    while ( have_rows('pdf_repeater') ) : the_row(); ?>
					    	<div class="colpdf col-lg-3 col-md-3 col-sm-6">
					    		<?php 
								$file = get_sub_field('pdf');
								if( $file ): ?>
									
									<a target="_blank" href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a>
									<button type="button" class="button-usls" onclick="location.href='<?php echo $file['url']; ?>'">DOWNLOAD</button>
								<?php endif; ?>
							</div>
						<?php 
					    endwhile; ?>
				    </div>
				<?php 
				endif;
				?>
			<?php 
        	elseif( get_row_layout() == 'newsletter' ): ?>
				<?php 
				if ( have_rows( 'content_blocks', 2 ) ) :
					while ( have_rows( 'content_blocks', 2 ) ) :
						the_row();
						if( get_row_layout() == 'newsletter' ):
							$main_headline = get_sub_field( 'main_headline' );
							$sub_headline = get_sub_field( 'sub_headline' );
							$paragraph = get_sub_field( 'paragraph' );
							?>
							<div class="newsletter-content">
								<?php if ($left_side_image): ?>
									<div class="left">
										<img clas="newsletter-page" src="<?php echo $left_side_image; ?>">
									</div>
								<?php endif ?>
								<div class="cont-textform pull-right">
								
									<div class="">
										<?php if ( $main_headline ) : ?>
											<h1 class="newsletter-headline"><?php echo esc_html( $main_headline ); ?></h1>
										<?php endif; ?>
										<?php if ( $sub_headline ) : ?>
											<h2 class="newsletter-sub-headline"><?php echo esc_html( $sub_headline ); ?></h2>
										<?php endif; ?>	
										<?php if ( $paragraph ) : ?>
											<div class="newsletter-description">
												<p><?php echo esc_html( $paragraph ); ?></p>
											</div>
										<?php endif; ?>	
									</div>
									<div class="newslt-acc">
										<form action="https://go.pardot.com/l/219422/2017-07-14/t2tq" method="post" class="form" id="pardot-form">
											<input name="219422_17423pi_219422_17423" id="219422_17423pi_219422_17423" class="text" size="30" maxlength="40" placeholder="First Name" onblur="validate_name(inputId_FN,missingErrorId_FN,'required');" autocomplete="off" type="text" required>
											<div id="error_for_219422_18181pi_219422_18181" style="display:none"></div>
											<input name="219422_17425pi_219422_17425" id="219422_17425pi_219422_17425" class="text" size="30" maxlength="80" placeholder="Last Name" onblur="validate_name(inputId_LN,missingErrorId_LN,'required');" autocomplete="off" type="text" required>
											<div id="error_for_219422_18183pi_219422_18183" style="display:none"></div>
											<input name="219422_17427pi_219422_17427" id="219422_17427pi_219422_17427" class="text" size="30" maxlength="255" onblur="validate_email(inputId_Email,missingErrorId_Email,'required');" autocomplete="off" placeholder="Email" type="text" required>
											<!-- forces IE5-8 to correctly submit UTF8 content  -->
											<input name="_utf8" type="hidden" value="&#9731;" />
											<input type="submit" accesskey="s" value="Sign me up!">
										</form>
									</div>
								</div>
							</div>
						<?php 
						endif;
					endwhile;
					wp_reset_postdata();
				endif;
				?>			
 			<?php 
	        elseif( get_row_layout() == 'legal_state_coverage' ): ?>

				<section class="states-coverage">
					<h1> <?php the_sub_field('title_h1'); ?> </h1>
					<div class="select-top">
						<?php 
							$args = array('post_type' => 'state_coverage', 'posts_per_page' => -1, 'orderby' => 'post_date', 'order' => 'DSC'); 
							$query = new WP_Query( $args );  							
								
							if ( $query->have_posts() ) :  
								$i = 1; ?>
								<h3> <?php the_field('states_list_title'); ?> </h3>
								<form>
									<div class="select-wrapper">
										<select id="dropdown-states-cov" name="dropdown">
											<option value="0">Choose Your State</option>
										<?php while ( $query->have_posts() ) : $query->the_post(); ?>
											
											<option value="<?php echo 'state' . $i; ?>"> <?php the_title(); ?> </option>
											<?php $i = $i + 1; ?>
										<?php endwhile; ?>
										<?php wp_reset_postdata(); ?>
										</select>
									</div>
								</form>		
					</div>
						<?php $i = 1; ?>	
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>		
							<div class="states" id="<?php echo 'contentstate' . $i; ?>">
								<div class="gun-law">
									<div class="description"> 
										<?php the_field('service_contract'); ?> 
									</div>
								</div>
							</div>       
							<?php $i = $i + 1; ?> 
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
			        <?php endif; ?>
		        </section>
			<?php 
	        elseif( get_row_layout() == 'membership_type_card' ): ?>
				<?php
				if( have_rows('membership_type') ):
				    while ( have_rows('membership_type') ) : the_row();
				        $image = get_sub_field('image');
				        $title_h1_1st_part = get_sub_field('title_h1_1st_part');
				        $title_h1_2nd_part = get_sub_field('title_h1_2nd_part');
				        $frequency_title_l = get_sub_field('frequency_title_l');
				        $price_l_1 = get_sub_field('price_l_1');
				        $price_l_2 = get_sub_field('price_l_2');
				        $price_l_3 = get_sub_field('price_l_3');
				        $frequency_title_r = get_sub_field('frequency_title_r');
				        $price_r_1 = get_sub_field('price_r_1');
				        $price_r_2 = get_sub_field('price_r_2');
				        $price_r_3 = get_sub_field('price_r_3');
				        ?>
				        <div class="membershiptype">
				        	<div class="top">
						        <?php if ($image): ?>
						        	<img src="<?php echo $image ?>">	
						        <?php endif ?>
						        
						        <?php if (($title_h1_1st_part) || ($title_h1_2nd_part)) : ?>
						        	<h1> 
						        		<?php echo $title_h1_1st_part; ?>  
						        		<span> <?php echo $title_h1_2nd_part; ?> </span>
						        	</h1>	
						        <?php endif ?>
					        </div>
					        <div class="pricingblock">
					        	
					        	<div class="col-sm-12 col-md-6 col-lg-6">
					        		<h2> <?php echo $frequency_title_l; ?> </h2>
					        		<div class="price">
					        			<span> <?php echo $price_l_1; ?> </span>
					        			<sup> <?php echo $price_l_2; ?> </sup>
					        			<sup> <?php echo $price_l_3; ?> </sup>
					        		</div>
					        	</div>
					        	<div class="col-sm-12 col-md-6 col-lg-6">
					        		<h2> <?php echo $frequency_title_r; ?> </h2>
					        		<div class="price">
					        			<span> <?php echo $price_r_1; ?> </span>
					        			<sup> <?php echo $price_r_2; ?> </sup>
					        			<sup> <?php echo $price_r_3; ?> </sup>
					        		</div>
					        	</div>
					        </div>
				        </div>
				        
				    <?php 
				    endwhile;
				endif;
				?>
			<?php 
	        elseif( get_row_layout() == 'addon_options' ): ?>
				<?php
				if( have_rows('addon_option') ):
				    while ( have_rows('addon_option') ) : the_row();
				        $image = get_sub_field('image');
				        $title_addon = get_sub_field('title_addon');
				        $frequency_title_l = get_sub_field('frequency_title_l');
				        $price_l_1 = get_sub_field('price_l_1');
				        $price_l_2 = get_sub_field('price_l_2');
				        $price_l_3 = get_sub_field('price_l_3');
				        $frequency_title_r = get_sub_field('frequency_title_r');
				        $price_r_1 = get_sub_field('price_r_1');
				        $price_r_2 = get_sub_field('price_r_2');
				        $price_r_3 = get_sub_field('price_r_3');
				        $bottom_text = get_sub_field('bottom_text');
				        ?>
				        <div class="addon_option">
				        	<div class="top">
						        <?php if ($image): ?>
						        	<img src="<?php echo $image ?>">	
						        <?php endif ?>
						        
						        <?php if ($title_addon) : ?>
						        	<h2> 
						        		<?php echo $title_addon; ?>  
						        	</h2>	
						        <?php endif ?>
					        </div>
					        <div class="pricingblock">
					        	
					        	<div class="col-sm-12 col-md-6 col-lg-6">
					        		<h2> <?php echo $frequency_title_l; ?> </h2>
					        		<div class="price">
					        			<span> <?php echo $price_l_1; ?> </span>
					        			<sup> <?php echo $price_l_2; ?> </sup>
					        			<sup> <?php echo $price_l_3; ?> </sup>
					        		</div>
					        	</div>
					        	<div class="col-sm-12 col-md-6 col-lg-6">
					        		<h2> <?php echo $frequency_title_r; ?> </h2>
					        		<div class="price">
					        			<span> <?php echo $price_r_1; ?> </span>
					        			<sup> <?php echo $price_r_2; ?> </sup>
					        			<sup> <?php echo $price_r_3; ?> </sup>
					        		</div>
					        	</div>
					        </div>
					        <?php if ($bottom_text): ?>
						        <div class="btmtext">
						        	<span> <?php echo $bottom_text; ?> </span>
						        </div>	
					        <?php endif ?>
					        
				        </div>
				        
				    <?php 
				    endwhile;
				endif;
				?>				
	        <?php 
	        elseif( get_row_layout() == 'button' ): ?>
				<div class="cont-btn">
					<?php if ( $button_url ) : ?>
						<button type="button" class="transition button-usls" onclick="location.href='<?php echo esc_url( $button_url ); ?>'"><?php echo esc_html( $button_text ); ?></button>
					<?php endif; ?>
				</div>				        
			<?php 
	        endif;
	    endwhile;
	endif;
?>