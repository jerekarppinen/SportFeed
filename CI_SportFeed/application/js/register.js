$(document).ready(function() { 
	$('.registerlink').on('click',function(e) {
		e.preventDefault();

		$('#registerbox').dialog({
			modal: true,
			resizable: false,
			draggable: false,
			show: { effect: 'clip', duration:300},
			hide: { effect: 'clip', duration:300},
			open: function() {
				e.preventDefault();
				$('.ui-widget-overlay').on('click',function(e) {
					$('#registerbox').dialog('close');
				})
			}
		});
	});

});