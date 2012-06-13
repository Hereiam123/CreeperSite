$(document).ready(function()
{
	
	$.ajax({
		type: 'GET',
		url: 'story.php',
		data: 'loaded =' + 0 + '&loadStory = 0',
		dataType: 'html',
		success: function(response) {
			$('#main_content').html(response);
		}
	});
	
	$(".readMore").live('click',function(event)
	{
		event.preventDefault();
		
		var readCurr = $(this).attr("name");
		alert(readCurr);
		
		$.ajax({
			type: 'GET',
			url: 'story.php',
			data: 'readThis =' + readCurr + '&loadStory = 1',
			dataType: 'html',
			success: function(response) {
				$('#main_content').html(response);
			}
		});
	});
	
	$("#stories").click(function()
	{
		$.ajax({
			type: 'GET',
			url: 'story.php',
			data: 'loaded =' + 0 + '&loadStory = 0',
			dataType: 'html',
			success: function(response) {
				$('#main_content').html(response);
			}
		});
	});
	
	
	
});

