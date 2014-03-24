/******************************************************************/
/* This slider script is written by Killian K.                    */
/* The script uses jQuery, don't forget to add it to your website */
/*                                                                */
/* slider v1.0 for Kemps Hotellerie                               */
/******************************************************************/
$(document).ready(function() {

	/**************************/
	/** Parameters of slider **/
	
	var numberSlides = 2;		/* number of images in the slider */
	var timeNextSlide = 5000; 	/* time to wait on each slide in milliseconds */
	var widthSlide = 640; 		/* width of the images in px */
	var speedTransition = 1300; /* time to do the transition in milliseconds */
	
	/** END Parameters *******/
	/*************************/

	setInterval(function(){
    	$.fn.slider(currentSlide, numberSlides, widthSlide, speedTransition).next()
    }, timeNextSlide);

	/* Slider buttons */
    $('#slider .next').on('click', function(){
    	$.fn.slider(currentSlide).next();
    });
    $('#slider .prev').on('click', function(){
 		$.fn.slider(currentSlide).prev();
    });

});

