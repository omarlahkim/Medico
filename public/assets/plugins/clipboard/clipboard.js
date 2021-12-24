(function($) {
	"use strict";

  if ($('.clipboard-icon').length) {
    var clipboard = new ClipboardJS('.clipboard-icon');
  
    $('.clipboard-icon').attr('data-bs-toggle', 'tooltip').attr('title', 'Copy to clipboard');
    
    clipboard.on('success', function(e) {
      e.trigger.classList.value = 'clipboard-icon btn-current'
      $('.btn-current').tooltip('hide');
      e.trigger.setAttribute('data-bs-original-title', 'Copied!');
      $('.btn-current').tooltip('show');
      setTimeout(function(){
          $('.btn-current').tooltip('hide');
          e.trigger.setAttribute('data-bs-original-title', 'Copy to clipboard');
          e.trigger.classList.value = 'clipboard-icon'
      },1000);
      e.clearSelection();
    });

  }

})(jQuery);

