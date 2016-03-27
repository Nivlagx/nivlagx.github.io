var $logo = $('.navbar-brand');
var $win = $(window);

$win.on('scroll', function () {
	var top = $win.scrollTop();
	$logo.css('transform', 'rotate(' + top + 'deg)');
});
