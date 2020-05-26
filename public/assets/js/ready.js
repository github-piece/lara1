
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
});

jQuery(document).ready(function(){
    jQuery('.scrollbar-inner').scrollbar();
});

$(document).ready(function(){

	var toggle_sidebar = false,
	toggle_sidebar1 = false,
	toggle_topbar = false,
	nav_open = 0,
	nav_open1 = 0,
	topbar_open = 0;

	if(!toggle_sidebar) {
		$toggle = $('.sidenav-toggler');

		$toggle.click(function() {
			if (nav_open == 1){
				$('html').removeClass('nav_open');
				$toggle.removeClass('toggled');
				nav_open = 0;
			}  else {
				$('html').addClass('nav_open');
				$toggle.addClass('toggled');
				nav_open = 1;
			}
		});

		toggle_sidebar = true;
	}

	if (!toggle_sidebar1) {

		$toggle = $('.sidenav-toggler1');

		$toggle.click(function() {
			if (nav_open1 == 1){
				$('html').removeClass('nav_open1');
				$toggle.removeClass('toggled');
				nav_open1 = 0;
			}  else {
				$('html').addClass('nav_open1');
				$toggle.addClass('toggled');
				nav_open1 = 1;
			}
		});
		toggle_sidebar1 = true;
	}

	if(!toggle_topbar) {
		$topbar = $('.topbar-toggler');

		$topbar.click(function(){
			if (topbar_open == 1) {
				$('html').removeClass('topbar_open');
				$topbar.removeClass('toggled');
				topbar_open = 0;
			} else {
				$('html').addClass('topbar_open');
				$topbar.addClass('toggled');
				topbar_open = 1;
			}
		});
		toggle_topbar = true;
	}

//select all
$('[data-select="checkbox"]').change(function(){
	$target = $(this).attr('data-target');
	$($target).prop('checked', $(this).prop("checked"));
})

});