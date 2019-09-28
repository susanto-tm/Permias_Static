/*
-----------------------------------------------------------------------------
Navbar Scroll Function Animation
-----------------------------------------------------------------------------
 */
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	var nav_primary = $('nav.primary');
	var nav_height = nav_primary.height();

	if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
		$("#permias-logo").addClass("logo-shrink")
			.removeClass("logo");
		$("nav").addClass('nav-scroll');
		$('nav h1').css("margin", "0")
			.addClass("scroll-h1");
		$("div.menu").addClass('menu-right');
		$("div.menu a").addClass('menu-item');

		$('article div.officer-header').addClass("header-scroll");

		// while (nav_height > 100) {
		// 	nav_primary.height(nav_height - 2);
		// 	nav_height -= 2;
		// }

	}
	else {
		$("#permias-logo").removeClass("logo-shrink")
			.addClass("logo");
		$("nav").removeClass('nav-scroll');
		$("nav h1").removeClass('scroll-h1');
		$("div.menu").removeClass('menu-right');
		$("div.menu a").removeClass('menu-item');
		$("article div.officer-header").removeClass('header-scroll');

		// while (nav_height < 420) {
		// 	nav_primary.height(nav_height + 2);
		// 	nav_height += 2;
		// }
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

var execs_display = document.getElementById('executive-officers');
var secondary_display = document.getElementById('secondary-officers');

var officers = [
	{'name': 'Asril Duta Hariandy', 'rank': 'President'},
	{'name': 'Farras Irsyaad Rivai', 'rank': 'Vice President'},
	{'name': 'Meddelin Trinita Setiawan', 'rank': 'Secretary'},
	{'name': 'Prawira Pikanto', 'rank': 'Treasurer'},
	{'name': 'Victor Suhendra', 'rank': 'Public Relations'},
	{'name': 'Timothy Alexander', 'rank': 'Webmaster'}
];

for (var i = 0; i < officers.length; i++) {
	var officer = officers[i];
	var tmpl = document.getElementById('officer_display').content.cloneNode(true);
	tmpl.querySelector('.name_container').innerText = officer.name;
	tmpl.querySelector('.rank_container').innerText = officer.rank;

	if (i < 2) {
		execs_display.appendChild(tmpl);
	}
	else {
		secondary_display.appendChild(tmpl);
	}


}
