/******************************************************************/
/* This slider script is written by Killian K.                    */
/* The script uses jQuery, don't forget to add it to your website */
/*                                                                */
/* slider v1.0 for Kemps Hotellerie                               */
/******************************************************************/

(function($) {
	$.fn.slider = function (currentSlide, numberSlides, widthSlide, speedTransition) { 
		return{
			slide: function (){
				//Animation of the slider
				var currentSlide = parseInt($('#currentSlide').text());
				var css = {
		        	left: - (currentSlide * widthSlide)
		        };

		        $('#slider-list').animate(css, speedTransition);
		        //console.log('currentSlide =' + currentSlide);

			},
		    next: function () {
		        //console.log('Next!');
		        var currentSlide = parseInt($('#currentSlide').text());
		        //console.log('currentSlide=' + currentSlide);
		        currentSlide++;
		        //To have a continuity between the pictures, we go back to the other end if we are at the limit
		        if(currentSlide > numberSlides-1){
		        	currentSlide = 0;
		        }
		        var boxCurrentSlide = document.getElementById('currentSlide');
		        boxCurrentSlide.innerHTML = currentSlide;
				this.slide();
		    },
		    prev: function () {
		        //console.log('Prev!');
		        var currentSlide = parseInt($('#currentSlide').text());
		        currentSlide--;
		        //To have a continuity between the pictures, we go back to the other end if we are at the limit
		        if(currentSlide<0){
		        	currentSlide = 1;
		        }
		        var boxCurrentSlide = document.getElementById('currentSlide');
		        boxCurrentSlide.innerHTML = currentSlide;
		        this.slide();
		    }
		};
	}

})(jQuery);