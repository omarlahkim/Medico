$(function(e) {
	'use strict';
	// Initialize popover
	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-head-primary" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-head-success" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-head-warning" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-head-danger" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-head-info" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-head-teal" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-head-indigo" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-head-pink" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-head-orange" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-head-dark" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-primary" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-success" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-warning" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-danger" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-info" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-teal" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-indigo" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-purple" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-orange" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
		template: '<div class="popover popover-pink" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	// By default, Bootstrap doesn't auto close popover after appearing in the page
	// resulting other popover overlap each other. Doing this will auto dismiss a popover
	// when clicking anywhere outside of it
	$(document).on('click', function(e) {
		$('[data-bs-toggle="popover"],[data-original-title]').each(function() {
			//the 'is' for buttons that trigger popups
			//the 'has' for icons within a button that triggers a popup
			if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
				(($(this).popover('hide').data('bs.popover') || {}).inState || {}).click = false // fix for BS 3.3.6
			}
		});
	});
});