$(document).ready(function()
{
	$("a").click(function(event)
	{
		event.preventDefault();
		//var user = $(this).attr("name");
		alert("Clicked");
		/*$.ajax({
			type: 'GET',
			url: 'search.php',
			data: 'userName=' + user + '&getTags=1',
			dataType: 'html',
			success: function(response) {
				$('#main_content').html(response);
			}
		});*/	
	});
}
);