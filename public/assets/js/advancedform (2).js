(function($) {
	"use strict";
	
	//accordion-wizard
	var options = {
		mode: 'wizard',
		autoButtonsNextClass: 'btn btn-primary float-left',
		autoButtonsPrevClass: 'btn btn-info',
		stepNumberClass: 'badge rounded-pill bg-primary ms-1',
		onSubmit: function() {
		  alert('Form submitted!');
		  return true;
		}
	}
	$( "#form" ).accWizard(options);
	
})(jQuery);      