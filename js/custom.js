/**
 * Custom Scripts
 *
 * @package     US Law Shield
 * @subpackage  JS
 * @author      Andres Posada
 * @link        https://github.com/posadallano
 * @since       1.0.0
 */


// Slides
jQuery('.slides').ready(function() {
	setTimeout(function() {
		jQuery('.slides').slick({
			infinite: true,
			speed: 300,
			slidesToShow: 5,
			slidesToScroll: 1,
			prevArrow: "<div class='arrwl'> <i class='transition fa fa-caret-left' aria-hidden='true'></i> </div>",
			nextArrow: "<div class='arrwr'> <i class='transition fa fa-caret-right' aria-hidden='true'></i> </div>",
			arrows: true,
			responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	});

});


jQuery(document).ready(function () {

	// Menu Toggle
	jQuery('#nav-icon').click(function () {
	    jQuery(this).toggleClass('open');
	    jQuery("#top-site-navigation").slideToggle('400');
	    jQuery("#header-site-navigation").slideToggle('400');
	    jQuery(".social-wrapper").slideToggle('400');
	    jQuery(".site-header").toggleClass('hdopn');
	});


	// Accordion mobile menu
	if (jQuery(window).width() < 992) {
        jQuery(".menu-header-wrapper #header-menu li.menu-item-has-children > a").click(function(e){
        	e.preventDefault();
            jQuery(this).parent().toggleClass('active');
            jQuery(this).parent().siblings().removeClass('active');
            if(false == jQuery(this).next().is(':visible')) {
                jQuery('.menu-header-wrapper #header-menu li > ul').slideUp(300);
            }
            jQuery(this).next().slideToggle(300);
        });
    }

	// Transition class
	jQuery('#right-footer-site-navigation li ul.sub-menu a, footer #left-footer-site-navigation ul li a, .menu-top-wraper #top-menu li a, .menu-header-wrapper #header-menu li a').addClass('transition');

	// Fancybox
	if (jQuery('section').hasClass('our_team')) {
		jQuery('[data-fancybox="member"]').fancybox({
		  transitionEffect : "zoom-in-out",
  		  buttons : false,
  		  infobar : false,
		  btnTpl : {
	    	smallBtn : '<div data-fancybox-close class="fancybox-close-small modal-close"></div>'
	      }

		});
	}

	// Remove attr Allow from Youtube iFrames
	jQuery('.cont-video iframe').removeAttr( "allow" );

	// Load More
    size_colv = jQuery(".videos-block .row").size();
    x=3;
    jQuery('.videos-block .row:lt('+x+')').show('slow');
    jQuery('#loadMore').click(function () {
        if (x+1 <= size_colv) {
        	x = x+1;
        }
        else {
        	x = size_colv;
        	jQuery("#loadMore").addClass("hide");	
        }
        jQuery('.videos-block .row:lt('+x+')').show('slow');
    });

    // Toggle Show Map
	setTimeout(function(){
        jQuery('#map_marker').hide();
    }, 1000);

    jQuery( ".display-map" ).click(function() {
	  jQuery('#map_marker').slideToggle( "slow" );
	  jQuery( this ).toggleClass('hdn');
	  if (jQuery(this).hasClass('hdn')) {
	  	jQuery(this).text('HIDE MAP');	
	  }
	  else{
	  	jQuery(this).text('SHOW MAP');		
	  }
	});


	// Toggle comments
	jQuery( "#write" ).click(function() {
	  jQuery( "#respond" ).slideToggle( "slow", function() {
	  });
	});	

	if (window.location.href.indexOf("?replytocom") > -1) {
	    jQuery( "#respond" ).show();
	}

	// Select filter State Coverage 
	(function($){
		$('#dropdown-states').change(function(){
			$.ajax({
				url: ajaxurl,
				type: 'post',
				data: 'action=change_post&id=' + this.value,
				success: function(output){
					$('#post-selected-container').html(output);
					$('.select-top').css("margin-bottom", "0");
				}
			});
		});
	})(jQuery);		


	// Select filter State Coverage 
	jQuery('.states').hide();
	jQuery('#dropdown-states-cov').change(function() {
		jQuery('.states').hide();
		jQuery('#content' + jQuery(this).val()).show();
	});			


	if (jQuery(window).width() < 992) {
		jQuery( ".hotline-content .cont-member" ).insertBefore( jQuery(".cont-hotline") );  
	}

	// Move Menu top on mobile to bottom
	if (jQuery(window).width() < 992) {
		jQuery( ".menu-header-wrapper" ).after( jQuery( ".menu-top-wraper" ) );
	}

	// Wrap iframe blog 
	jQuery(".single-post .entry-content iframe").wrap('<div class="cont-video"></div>');

	// Remove padding left column accordion 1 column
	jQuery('.cont-accordion .accordion-row .column-acc').each(function() {
	  var $this = jQuery(this);
	  if ($this.find('div').length > 1) {
	     jQuery(this).css("padding", "0");
	  }
	});

	// Lateral arrows to ligtbox Our Team
	jQuery( "<p>Test</p>" ).appendTo( ".fancybox-navigation .fancybox-button--arrow_left" );
	jQuery( "<i class='fa fa-caret-right' aria-hidden='true'></i>" ).appendTo( ".fancybox-navigation" );

	// Image responsive
	jQuery.fn.getBgImage = function(callback) {
		var height = 0;
		var path = jQuery(this).css('background-image').replace('url', '').replace('(', '').replace(')', '').replace('"', '').replace('"', '');
		var tempImg = jQuery('<img />');
		tempImg.hide();
		tempImg.bind('load', callback);
		jQuery('body').append(tempImg); 
		tempImg.attr('src', path);
		jQuery('#tempImg').remove(); 
	};

	jQuery('section.cta.bckimg').each(function(){
		var $this = jQuery(this);
		jQuery(this).getBgImage(function() {
			var backHeight = jQuery(this).height();
			var backWidth = jQuery(this).width();
			var divBackg = backHeight / backWidth;
	        var ratioBackg = (divBackg * 100) + '%';
	        jQuery($this).css('padding-bottom', ratioBackg);
		});
	});    
});


// Accordion Function
jQuery(function() {
    setTimeout("jQuery('.cont-accordion .acc-content').slideToggle('fast');", 1);
    jQuery(".cont-accordion .acc-content").first().slideToggle("fast").prev().addClass("current");
    jQuery(".cont-accordion .label-ac").click(function() {
        jQuery(this).next(".acc-content").slideToggle("fast").siblings(".acc-content:visible").slideUp("fast");
        jQuery(this).toggleClass("current");
        jQuery(this).siblings(".label-ac").removeClass("current");
		jQuery(this).animate({height:'inherit'}, 250).promise().done(function(){
            jQuery('html,body').animate({scrollTop: jQuery(this).offset().top}, 250);
        });        
    });
});


jQuery(window).load(function() {
	// Get the height of left column on Member Banner
	if (jQuery(window).width() > 991) {
		var heightLeft = jQuery('.member-content .left').height();
		var midHeight = (heightLeft/2).toFixed(2);
		jQuery('.member-content .member-benefit').css("height", midHeight);
	}

	// Get largest height of comprehensive coverage icons
	var maxHeight = 1;
	jQuery('.comp-coverage .image img').each(function() {
	    if (jQuery(this).height() > maxHeight) {
	        maxHeight = jQuery(this).height();
	    }
	});
	jQuery('.comp-coverage .image').height(maxHeight);	
});	


jQuery( window ).resize(function() {
	// Get the height of left column on Member Banner
	if (jQuery(window).width() > 991) {
		var heightLeft = jQuery('.member-content .left').height();
		var midHeight = (heightLeft/2).toFixed(2);
		jQuery('.member-content .member-benefit').css("height", midHeight);
	}
});