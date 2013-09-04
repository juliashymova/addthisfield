(function($) {
	$(document).ready(function(){
		$('.addthis-toggler').click(function() {
			$(this).parent().find('div.protected-downloads-form').fadeToggle('fast'); 
		});
	});
})(jQuery);

	
