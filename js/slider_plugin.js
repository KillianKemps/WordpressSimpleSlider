/******************************************************************/
/* This slider script is written by Killian K.                    */
/* The script uses jQuery, don't forget to add it to your website */
/*                                                                */
/* slider v1.0 for Kemps Hotellerie                               */
/******************************************************************/

(function(jQuery) {
	jQuery.fn.slider = function (widthSlide, speedTransition) { 
		return{
			slide: function (next, otherSide){
				//Animation of the slider
				var slides_css = {
		        	left: - (window.currentSlide * widthSlide)
		        };

		        jQuery('#slider-list').animate(slides_css, speedTransition);
		        if(next){
		        	if (otherSide) { 
			        	jQuery('#slider-caption p:nth-child(' + (window.numberSlides) + ')').css("display", "none");
			        	jQuery('#slider-caption p:nth-child(' + 1 + ')').css("display", "block");
		        	}
		        	else{
			        	jQuery('#slider-caption p:nth-child(' + window.currentSlide + ')').css("display", "none");
			        	jQuery('#slider-caption p:nth-child(' + (window.currentSlide+1) + ')').css("display", "block");
		        	}
		        }
		        else{
		        	if(otherSide){
		        		jQuery('#slider-caption p:nth-child(' + (1) + ')').css("display", "none");
		        		jQuery('#slider-caption p:nth-child(' + (window.numberSlides) + ')').css("display", "block");
		        	}
		        	else{
		        		jQuery('#slider-caption p:nth-child(' + (window.currentSlide+2) + ')').css("display", "none");
		        		jQuery('#slider-caption p:nth-child(' + (window.currentSlide+1) + ')').css("display", "block");
		        	}
		        	
		        }
		        console.log(window.currentSlide);
		        //console.log('currentSlide =' + currentSlide);

			},
		    next: function () {
		        //console.log('Next!');
		        //console.log('currentSlide=' + currentSlide);
		        window.currentSlide++;
		        //To have a continuity between the pictures, we go back to the other end if we are at the limit
		        if(window.currentSlide > window.numberSlides-1){
		        	window.currentSlide = 0;
		        	return this.slide(true, true)
		        }
				this.slide(true, false);
		    },
		    prev: function () {
		        //console.log('Prev!');
		        //console.log('currentSlide=' + currentSlide);
		        window.currentSlide--;
		        //To have a continuity between the pictures, we go back to the other end if we are at the limit
		        if(window.currentSlide<0){
		        	window.currentSlide = window.numberSlides-1;
		        	return this.slide(false, true);
		        }
		        this.slide(false, false);
		    }
		};
	}

})(jQuery);