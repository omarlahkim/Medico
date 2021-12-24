(function($) {
	"use strict";

	// ______________ PAGE LOADING
	$(window).on("load", function(e) {
		$("#global-loader").fadeOut("slow");
	})
	
	//Color-Theme
	$(document).on("click", "a[data-theme]", function() {
		$("head link#theme").attr("href", $(this).data("theme"));
		$(this).toggleClass('active').siblings().removeClass('active');
	});
	
	// ______________Full screen
	$(document).on("click", ".fullscreen-button", function toggleFullScreen() {
	  $('html').addClass('fullscreenie');
		if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
			if (document.documentElement.requestFullScreen) {
				document.documentElement.requestFullScreen();
			} else if (document.documentElement.mozRequestFullScreen) {
				document.documentElement.mozRequestFullScreen();
			} else if (document.documentElement.webkitRequestFullScreen) {
				document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
			} else if (document.documentElement.msRequestFullscreen) {
				document.documentElement.msRequestFullscreen();
			}
		} else {
		 $('html').removeClass('fullscreenie');
			if (document.cancelFullScreen) {
				document.cancelFullScreen();
			} else if (document.mozCancelFullScreen) {
				document.mozCancelFullScreen();
			} else if (document.webkitCancelFullScreen) {
				document.webkitCancelFullScreen();
			} else if (document.msExitFullscreen) {
				document.msExitFullscreen();
			}
		}
	})
	
	// ______________ BACK TO TOP BUTTON
	$(window).on("scroll", function(e) {
		if ($(this).scrollTop() > 0) {
			$('#back-to-top').fadeIn('slow');
		} else {
			$('#back-to-top').fadeOut('slow');
		}
	});
	$(document).on("click", "#back-to-top", function(e) {
		$("html, body").animate({
			scrollTop: 0
		},0);
		return false;
	});
	
	
	// ______________ COVER IMAGE
	$(".cover-image").each(function() {
		var attr = $(this).attr('data-image-src');
		if (typeof attr !== typeof undefined && attr !== false) {
			$(this).css('background', 'url(' + attr + ') center center');
		}
	});

	// ______________ Start rating
	var ratingOptions = {
		selectors: {
			starsSelector: '.rating-stars',
			starSelector: '.rating-star',
			starActiveClass: 'is--active',
			starHoverClass: 'is--hover',
			starNoHoverClass: 'is--no-hover',
			targetFormElementSelector: '.rating-value'
		}
	};
	$(".rating-stars").ratingStars(ratingOptions);

	//Increment & Decrement
	var quantitiy=0;
	$('.quantity-right-plus').on('click', function(e){
		e.preventDefault();
		var quantity = parseInt($('.quantity').val());
		$('.quantity').val(quantity + 1);

	});
	$('.quantity-left-minus').on('click', function(e){
		e.preventDefault();
		var quantity = parseInt($('.quantity').val());
		if(quantity>0){
			$('.quantity').val(quantity - 1);
		}
	});
	
	// ______________Chart-circle
	if ($('.chart-circle').length) {
		$('.chart-circle').each(function() {
			let $this = $(this);
			$this.circleProgress({
				fill: {
					color: $this.attr('data-color')
				},
				size: $this.height(),
				startAngle: -Math.PI / 4 * 2,
				emptyFill: 'rgba(119, 119, 142, 0.2)',
				lineCap: 'round'
			});
		});
	}

	// ______________ CARD
	const DIV_CARD = 'div.card';
	
	// ______________ TOOLTIP
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  	return new bootstrap.Tooltip(tooltipTriggerEl)
	})
	
	// ______________ POPOVER
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
	  return new bootstrap.Popover(popoverTriggerEl)
	})
	
	// ______________ FUNCTION FOR REMOVE CARD
	$(document).on('click', '[data-bs-toggle="card-remove"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.remove();
		e.preventDefault();
		return false;
	});
	
	
	// ______________ FUNCTIONS FOR COLLAPSED CARD
	$(document).on('click', '[data-bs-toggle="card-collapse"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-collapsed');
		e.preventDefault();
		return false;
	});
	
	// ______________ CARD FULL SCREEN
	$(document).on('click', '[data-bs-toggle="card-fullscreen"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-fullscreen').removeClass('card-collapsed');
		e.preventDefault();
		return false;
	});
	
	
	// ______________ SWITCHER-toggle ______________//
	
	/*Skin modes*/
	$(document).on("click", '#myonoffswitch16', function () {    
		if (this.checked) {
			$('body').addClass('dark-mode');
			$('body').removeClass('light-mode');
			$('body').removeClass('transparent-mode');
			localStorage.setItem("dark-mode", "True");
		}
		else {
			$('body').removeClass('dark-mode');
			localStorage.setItem("dark-mode", "false");
		}
	});
	$(document).on("click", '#myonoffswitch3', function () {    
		if (this.checked) {
			$('body').addClass('light-mode');
			$('body').removeClass('dark-mode');
			$('body').removeClass('transparent-mode');
			localStorage.setItem("light-mode", "True");
		}
		else {
			$('body').removeClass('light-mode');
			localStorage.setItem("light-mode", "false");
		}
	});
	$(document).on("click", '#myonoffswitch4', function ()  {    
		if (this.checked) {
			$('body').addClass('transparent-mode');
			$('body').removeClass('dark-mode');
			$('body').removeClass('light-mode');
			localStorage.setItem("transparent-mode", "True");
		}
		else {
			$('body').removeClass('transparent-mode');
			localStorage.setItem("transparent-mode", "false");
		}
	});	
	
	/*-- Horizonatal Versions---*/
	$('#myonoffswitch13').click(function () {    
		if (this.checked) {
			$('body').addClass('default');
			$('body').removeClass('boxed');
			localStorage.setItem("default", "True");
		}
		else {
			$('body').removeClass('default');
			localStorage.setItem("default", "false");
		}
	});
	$('#myonoffswitch14').click(function () {    
		if (this.checked) {
			$('body').addClass('boxed');
			$('body').removeClass('default');
			localStorage.setItem("boxed", "True");
		}
		else {
			$('body').removeClass('boxed');
			localStorage.setItem("boxed", "false");
		}
	});
	/*------ Horizonatal-menu-------*/
	/*Header Style*/
	$(document).on("click", '#myonoffswitch10', function () {    
		if (this.checked) {
			$('body').addClass('light-hor-header');
			$('body').removeClass('color-hor-header');
			$('body').removeClass('gradient-hor-header');
			$('body').removeClass('color-hor-menu');
			$('body').removeClass('light-hor-menu');
			$('body').removeClass('gradient-hor-menu');
			$('body').removeClass('dark-hor-menu');
			localStorage.setItem("default-hor-header", "True");
		}
		else {
			$('body').removeClass('light-hor-header');
			localStorage.setItem("light-hor-header", "false");
		}
	});	
	$(document).on("click", '#myonoffswitch11', function ()  {    
		if (this.checked) {
			$('body').addClass('color-hor-header');
			$('body').removeClass('light-hor-header');
			$('body').removeClass('gradient-hor-header');
			$('body').removeClass('color-hor-menu');
			$('body').removeClass('light-hor-menu');
			$('body').removeClass('gradient-hor-menu');
			$('body').removeClass('dark-hor-menu');
			localStorage.setItem("color-hor-header", "True");
		}
		else {
			$('body').removeClass('color-hor-header');
			localStorage.setItem("color-hor-header", "false");
		}
	});	
	$(document).on("click", '#myonoffswitch12', function ()  {    
		if (this.checked) {
			$('body').addClass('gradient-hor-header');
			$('body').removeClass('color-hor-header');
			$('body').removeClass('light-hor-header');
			$('body').removeClass('color-hor-menu');
			$('body').removeClass('light-hor-menu');
			$('body').removeClass('gradient-hor-menu');
			$('body').removeClass('dark-hor-menu');
			localStorage.setItem("gradient-hor-header", "True");
		}
		else {
			$('body').removeClass('gradient-hor-header');
			localStorage.setItem("gradient-hor-header", "false");
		}
	});	
	
	/*Menu Style*/
	$(document).on("click", '#myonoffswitch6', function ()  {    
		if (this.checked) {
			$('body').addClass('color-hor-menu');
			$('body').removeClass('light-hor-menu');
			$('body').removeClass('dark-hor-menu');
			$('body').removeClass('gradient-hor-menu');
			$('body').removeClass('light-hor-header');
			$('body').removeClass('gradient-hor-header');
			$('body').removeClass('color-hor-header');
			localStorage.setItem("color-hor-menu", "True");
		}
		else {
			$('body').removeClass('color-hor-menu');
			localStorage.setItem("color-hor-menu", "false");
		}
	});	
	$(document).on("click", '#myonoffswitch7', function ()  {    
		if (this.checked) {
			$('body').addClass('light-hor-menu');
			$('body').removeClass('color-hor-menu');
			$('body').removeClass('dark-hor-menu');
			$('body').removeClass('gradient-hor-menu');
			$('body').removeClass('color-hor-header');
			$('body').removeClass('gradient-hor-header');
			$('body').removeClass('light-hor-header');
			localStorage.setItem("light-hor-menu", "True");
		}
		else {
			$('body').removeClass('light-hor-menu');
			localStorage.setItem("light-hor-menu", "false");
		}
	});	
	$(document).on("click", '#myonoffswitch8', function ()  {    
		if (this.checked) {
			$('body').addClass('dark-hor-menu');
			$('body').removeClass('light-hor-menu');
			$('body').removeClass('color-hor-menu');
			$('body').removeClass('gradient-hor-menu');
			$('body').removeClass('color-hor-header');
			$('body').removeClass('gradient-hor-header');
			$('body').removeClass('light-hor-header');
			localStorage.setItem("dark-hor-menu", "True");
		}
		else {
			$('body').removeClass('dark-hor-menu');
			localStorage.setItem("dark-hor-menu", "false");
		}
	});	
	$(document).on("click", '#myonoffswitch9', function ()  {    
		if (this.checked) {
			$('body').addClass('gradient-hor-menu');
			$('body').removeClass('color-hor-menu');
			$('body').removeClass('light-hor-menu');
			$('body').removeClass('dark-hor-menu');
			$('body').removeClass('color-hor-header');
			$('body').removeClass('gradient-hor-header');
			$('body').removeClass('light-hor-header');
			localStorage.setItem("gradient-hor-menu", "True");
		}
		else {
			$('body').removeClass('gradient-hor-menu');
			localStorage.setItem("gradient-hor-menu", "false");
		}
	});	
	
	/*Left-menu Background Image*/
	$(document).on("click", '#myonoffswitch-1', function ()  {    
		if (this.checked) {
			$('body').addClass('sidemenu-bgimage');
			localStorage.setItem("sidemenu-bgimage", "True");
		}
		else {
			$('body').removeClass('sidemenu-bgimage');
			localStorage.setItem("sidemenu-bgimage", "false");
		}
	});
	
	/*Left-menu Style1*/
	$(document).on("click", '#myonoffswitch', function ()  {    
		if (this.checked) {
			$('body').addClass('color-menu');
			$('body').removeClass('light-menu');
			$('body').removeClass('dark-menu');
			$('body').removeClass('gradient-menu');
			localStorage.setItem("color-menu", "True");
		}
		else {
			$('body').removeClass('color-menu');
			localStorage.setItem("color-menu", "false");
		}
	});
	$(document).on("click", '#myonoffswitch1', function () {   
		if (this.checked) {
			$('body').addClass('light-menu');
			$('body').removeClass('color-menu');
			$('body').removeClass('dark-menu');
			$('body').removeClass('gradient-menu');
			localStorage.setItem("light-menu", "True");
		}
		else {
			$('body').removeClass('light-menu');
			localStorage.setItem("light-menu", "false");
		}
	});	
	$(document).on("click", '#myonoffswitch2', function () {   
		if (this.checked) {
			$('body').addClass('dark-menu');
			$('body').removeClass('color-menu');
			$('body').removeClass('light-menu');
			$('body').removeClass('gradient-menu');
			localStorage.setItem("dark-menu", "True");
		}
		else {
			$('body').removeClass('dark-menu');
			localStorage.setItem("dark-menu", "false");
		}
	});
	$(document).on("click", '#myonoffswitch5', function ()  {    
		if (this.checked) {
			$('body').addClass('gradient-menu');
			$('body').removeClass('color-menu');
			$('body').removeClass('light-menu');
			$('body').removeClass('dark-menu');
			localStorage.setItem("gradient-menu", "True");
		}
		else {
			$('body').removeClass('gradient-menu');
			localStorage.setItem("gradient-menu", "false");
		}
	});		
	
	/*-- Left-menu Versions---*/
	$('#myonoffswitch15').click(function () {    
		if (this.checked) {
			$('body').addClass('default');
			$('body').removeClass('boxed');
			localStorage.setItem("default", "True");
		}
		else {
			$('body').removeClass('default');
			localStorage.setItem("default", "false");
		}
	});
	$('#myonoffswitch17').click(function () {    
		if (this.checked) {
			$('body').addClass('boxed');
			$('body').removeClass('default');
			localStorage.setItem("boxed", "True");
		}
		else {
			$('body').removeClass('boxed');
			localStorage.setItem("boxed", "false");
		}
	});

	// ______________ Styles ______________//
	
	
	//$('body').addClass('transparent-mode');//
	
	//$('body').addClass('sidemenu-bgimage');//
	
	//$('body').addClass('color-menu');//
	
	//$('body').addClass('light-menu');//
	
	//$('body').addClass('dark-menu');//
	
	//$('body').addClass('gradient-menu');//
	
	//$('body').addClass('light-hor-header');//
	
	//$('body').addClass('color-hor-header');//
	
	//$('body').addClass('gradient-hor-header');//
	
	//$('body').addClass('color-hor-menu');//
	
	//$('body').addClass('light-hor-menu');//
	
	//$('body').addClass('gradient-hor-menu');//
	
	//$('body').addClass('dark-hor-menu');//

	// $('body').addClass('boxed');//

	// $('body').addClass('centerlogo-horizontal');//
	
})(jQuery);
