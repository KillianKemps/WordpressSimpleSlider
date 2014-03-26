/******************************************************************/
/* This slider script is written by Killian K.                    */
/* The script uses jQuery, don't forget to add it to your website */
/*                                                                */
/* slider v1.0 for Kemps Hotellerie                               */
/******************************************************************/
jQuery(document).ready(function() {

	/**************************/
	/** Parameters of slider **/
	
	window.numberSlides = jQuery('#slider-list li').length;		/* number of images in the slider */
	var timeNextSlide = 5000; 	/* time to wait on each slide in milliseconds */
	var widthSlide = 640; 		/* width of the images in px */
	var speedTransition = 1300; /* time to do the transition in milliseconds */
	
	/** END Parameters *******/
	/*************************/
	window.currentSlide = 0;

	setInterval(function(){
    	jQuery.fn.slider(widthSlide, speedTransition).next()
    }, timeNextSlide);

	/* Slider buttons */
    jQuery('#slider .next').on('click', function(){
    	jQuery.fn.slider(widthSlide, speedTransition).next();
    });
    jQuery('#slider .prev').on('click', function(){
 		jQuery.fn.slider(widthSlide, speedTransition).prev();
    });

});

