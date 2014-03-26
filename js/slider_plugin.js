/******************************************************************/
/* This slider script is written by Killian K.                    */
/* The script uses jQuery, don't forget to add it to your website */
/*                                                                */
/* slider v1.0 for Kemps Hotellerie                               */
/******************************************************************/

(function(jQuery) {
	jQuery.fn.slider = function (widthSlide, speedTransition) { 
		return{
			slide: function (){
				//Animation of the slider
				var css = {
		        	left: - (window.currentSlide * widthSlide)
		        };

		        jQuery('#slider-list').animate(css, speedTransition);
		        //console.log('currentSlide =' + currentSlide);

			},
		    next: function () {
		        //console.log('Next!');
		        //console.log('currentSlide=' + currentSlide);
		        window.currentSlide++;
		        //To have a continuity between the pictures, we go back to the other end if we are at the limit
		        if(window.currentSlide > window.numberSlides-1){
		        	window.currentSlide = 0;
		        }
				this.slide();
		    },
		    prev: function () {
		        //console.log('Prev!');
		        //console.log('currentSlide=' + currentSlide);
		        window.currentSlide--;
		        //To have a continuity between the pictures, we go back to the other end if we are at the limit
		        if(window.currentSlide<0){
		        	window.currentSlide = 1;
		        }
		        this.slide();
		    }
		};
	}

})(jQuery);