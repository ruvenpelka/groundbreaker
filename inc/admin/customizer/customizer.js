/**
 * In this file, you can enhance the customizer directly with JavaScript.
 * This is especially great if you have custom controls that need JavaScript to
 * work.
 */

jQuery( document ).ready( function( $ ) {

	$('.customize-control').each(function() {
		var $desktop_control = $(this);
		var $tablet_control = $(this).next();
		var $mobile_control = $(this).next().next();
		var responsive_controls_found = false;
		var html = '<li class="customize-control rvn-responsive-buttons">' +
		               '<a href="#" class="rvn-responsive-button rvn-responsive-button-desktop is-active" title="Desktop" data-target="desktop"><span class="screen-reader-text">Desktop</span></a>' +
		               '<a href="#" class="rvn-responsive-button rvn-responsive-button-tablet" title="Tablet" data-target="tablet"><span class="screen-reader-text">Tablet</span></a>' +
		               '<a href="#" class="rvn-responsive-button rvn-responsive-button-mobile" title="Mobile" data-target="mobile"><span class="screen-reader-text">Mobile</span></a>' +
		           '</li>';

		if(/Desktop: /.test($('.customize-control-title', $desktop_control).text())) {
			if(/Tablet: /.test($('.customize-control-title', $tablet_control).text())) {
				if(/Mobile: /.test($('.customize-control-title', $mobile_control).text())) {
					responsive_controls_found = true;
				}
			}
		}

		if(responsive_controls_found) {
			$('.customize-control-title', $desktop_control).text($('.customize-control-title', $(this)).text().replace('Desktop: ', ''));
			$('.customize-control-title', $tablet_control).text($('.customize-control-title', $(this)).text().replace('Tablet: ', ''));
			$('.customize-control-title', $mobile_control).text($('.customize-control-title', $(this)).text().replace('Mobile: ', ''));
			var $switch_buttons = $(html).insertBefore($desktop_control);
			var $desktop_button = $('a[data-target=desktop]', $switch_buttons);
			var $tablet_button = $('a[data-target=tablet]', $switch_buttons);
			var $mobile_button = $('a[data-target=mobile]', $switch_buttons);

			$tablet_control.hide();
			$mobile_control.hide();

			$desktop_button.on('click', function() {
				$desktop_control.show();
				$tablet_control.hide();
				$mobile_control.hide();
				$desktop_button.addClass('is-active');
				$tablet_button.removeClass('is-active');
				$mobile_button.removeClass('is-active');
			});
			$tablet_button.on('click', function() {
				$desktop_control.hide();
				$tablet_control.show();
				$mobile_control.hide();
				$desktop_button.removeClass('is-active');
				$tablet_button.addClass('is-active');
				$mobile_button.removeClass('is-active');
			});
			$mobile_button.on('click', function() {
				$desktop_control.hide();
				$tablet_control.hide();
				$mobile_control.show();
				$desktop_button.removeClass('is-active');
				$tablet_button.removeClass('is-active');
				$mobile_button.addClass('is-active');
			});
		}
	});

} );