(function ($) {
	"use strict";

	$(document).ready(function(){

	$('.menu-toggle-bar a').click(function(){
		$('.stuck_container').slideToggle();
		
	});
	
	
	
	
	var submenus = document.querySelectorAll("ul.sub-menu");
		if(submenus.length > 0) for(var i=0; i<submenus.length; i++) {
			var span = document.createElement('span');
			span.classList.add('expand');
			span.innerHTML = "<i class='fas fa-angle-down'></i>";
			
		

			span.addEventListener('click', function(){
				this.classList.toggle('active');
				// this.nextElementSibling.classList.toggle('active');
				  this.parentNode.classList.toggle('active');
			});
			
			submenus[i].previousElementSibling.appendChild(span);
			submenus[i].parentNode.insertBefore(span, submenus[i]);
		}
		
	
	$("span.expand").click(function(){
		   $(this).parent().find('.sub-menu:first').slideToggle(); 
		  // $(this).parent().closest('.sub-menu').slideToggle();
		

	  });

			
	});

}(jQuery));