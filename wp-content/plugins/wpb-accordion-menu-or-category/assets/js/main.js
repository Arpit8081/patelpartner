(function($) {
  "use strict";

	/**
	 * Init accordion
	 */


	$(".wpb_category_n_menu_accordion").each(function(){

		var accordion 		= $(this).data('accordion'),
			indicator_icon  = $(this).data('indicator_icon');

		$(this).find('.wpb_category_n_menu_accordion_list').navgoco({
			caretHtml: indicator_icon,
			accordion: accordion,
			openClass: 'wpb-submenu-indicator-minus',
			save: true,
			cookie: {
				name: 'navgoco',
				expires: false,
				path: '/'
			},
			slide: {
				duration: 400,
				easing: 'swing'
			}
      	});

	});

}(jQuery));