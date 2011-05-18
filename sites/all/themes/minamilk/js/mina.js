(function ($) {

jQuery(document).ready(function(){
	$('#block-menu-menu-menu-sections a.active').parents('ul').show();
	$('#block-menu-menu-menu-sections li.expanded > a').click(function() {
			$(this).parent().children("ul").toggle('slow');
			$(this).parent().siblings().children("ul").hide('slow');
			return false;
	});

});

})(jQuery);