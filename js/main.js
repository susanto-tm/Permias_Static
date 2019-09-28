/*
-----------------------------------------------------------------------------
Navbar Scroll Function Animation
-----------------------------------------------------------------------------
 */
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
		$("#permias-logo").addClass("logo-shrink")
			.removeClass("logo");
		$("nav").addClass('nav-scroll');
		$('nav h1').css("margin", "0")
			.addClass("scroll-h1");
		$("div.menu").addClass('menu-right');
		$("div.menu a").addClass('menu-item');
	}
	else {
		$("#permias-logo").removeClass("logo-shrink")
			.addClass("logo");
		$("nav").removeClass('nav-scroll');
		$("nav h1").removeClass('scroll-h1');
		$("div.menu").removeClass('menu-right');
		$("div.menu a").removeClass('menu-item');
	}
}

/*
----------------------------------------------------------------------------
Templates for Officer Members

Method: Create template in the html file and use importNode function to
		add a list of titles and descriptions into its respective id's in
		main HTML code

----------------------------------------------------------------------------
 */
