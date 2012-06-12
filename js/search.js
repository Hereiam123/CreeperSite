$(document).ready(function()
{
	$("#Submit").click(function()
	{
		var search = $("#Search").val();
		$.ajax({
			type: 'GET',
			url: 'search.php',
			data: 'search=' + search + '&getTags=0',
			dataType: 'html',
			success: function(response) {
				$('#main_content').html(response);
			}
		});
	});
	
	$("#searchResult").click(function()
	{
		alert("Clicked");
		var user = $('#searchResult').attr("name");
		$.ajax({
			type: 'GET',
			url: 'search.php',
			data: 'user=' + user + '&getTags=1',
			dataType: 'html',
			success: function(response) {
				$('#main_content').html(response);
			}
		});	
	});
});