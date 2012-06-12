$(document).ready(function()
{
	$("#SubmitSearch").click(function()
	{
		var search = $("#SearchBox").val();
		$.ajax({
			type: 'GET',
			url: 'search.php',
			data: 'searchText=' + search + '&getTags=0',
			dataType: 'html',
			success: function(response) {
				$('#main_content').html(response);
			}
		});
	});
});