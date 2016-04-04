$(document).ready(function(argument) {
	var rooms = 3;
	$('#adress').keyup(function()
	{			
		
	
		$.post(
			'../wp-admin/admin-ajax.php', 
			{
				'action':'filter_logement',
				'neighbourhood': $('#adress').val(),
				'rooms' : rooms
			},
			function(response){
				$('#apartments').html(response);
			})
	});
	$('.sod_option').click(function()
	{	
		rooms = returnToRoomsInt($(this).html())
		$.post(
			'../wp-admin/admin-ajax.php', 
			{
				'action':'filter_logement',
				'neighbourhood': $('#adress').val(),
				'rooms' : rooms
			},
			function(response){
				$('#apartments').html(response);
			})
	});
	$('#minimum-price').click(function()
	{
		$.post(
			'../wp-admin/admin-ajax.php', 
			{
				'action':'filter_logement',
				'neighbourhood': $('#adress').val(),
				'rooms' : rooms,
				'orderBy' : 'ASC',		
			},
			function(response){
				$('#apartments').html(response);
			})
	})
	$('#maximum-price').click(function()
	{
		$.post(
			'../wp-admin/admin-ajax.php', 
			{
				'action':'filter_logement',
				'neighbourhood': $('#adress').val(),
				'rooms' : rooms,
				'orderBy' : 'DESC',		
			},
			function(response){
				$('#apartments').html(response);
			})
	})
	function returnToRoomsInt(roomString)
	{
		switch(roomString)
		{
			case 'DANS 1 MOIS': return 1; break;
			case 'DANS 2 MOIS': return 2; break;
			case 'DANS 3 MOIS': return 3; break;
			default: return 0; 
		}
	}
})