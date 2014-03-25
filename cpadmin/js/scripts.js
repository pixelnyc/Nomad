jQuery(document).ready(function() {

	
	
	
	$("#sort_window").fancybox({
		'width'				: '75%',
		'height'			: '75%',
        'autoScale'     	: false,
        'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe',
		onClosed	:	function() {
            
			parent.location.reload(true);
			//alert('Closed!');
		}
	});
	
	
		$(".edit_item").fancybox({
		'width'				: '75%',
		'height'			: '75%',
        'autoScale'     	: false,
        'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe',
		onClosed	:	function() {
            
			parent.location.reload(true);
			//alert('Closed!');
		}
	});
	
	
	
		$(".add_text_btn").fancybox({
		'width'				: '75%',
		'height'			: '75%',
        'autoScale'     	: false,
        'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe',
		onClosed	:	function() {
            
			parent.location.reload(true);
			//alert('Closed!');
		}
	});	


});