$(document).ready(function()
{
	$.ajax({
			type: 'POST',
			url: 'story.php',
			data: {loaded:1},
			dataType: 'html',
			success: function(response) {
				$('#main_content').html(response);
		}
	});
	
	
	$("#submitCreeperButton").live('click',function(event)
	{
		    event.preventDefault();
			$.ajax({
			type: 'POST',
			url: 'creeperForm.php',
			dataType: 'html',
			success: function(response) {
				$('#main_content').html(response);
			}
		});
	});
	
	$(".addTag").live('click', function(event)
	{
		event.preventDefault();
		$().;
		$('.allegation').attr("name",1).clone().appendTo("#main_content");
		
	});
	
	//Add Searching Through Upper Task Bar
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
	
	//Add Searching Through Upper Task Bar
	$("#SubmitSearch2").live('click',function()
	{
		var search = $("#SearchBox2").val();
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
	
	//Allows dynamically added userNames from search results to be clicked to get
	//their allegations against them.
	$(".searchResult").live('click',function(event)
	{
		event.preventDefault();
		var user = $(this).attr("name");
		$.ajax({
			type: 'GET',
			url: 'search.php',
			data: 'userName=' + user + '&getTags=1',
			dataType: 'html',
			success: function(response) {
				$('#main_content').html(response);
			}
		});	
	});
	
	//this technically should let the user read more on a story, but it won't function right now
	$(".readMore").live('click',function(event)
	{
		event.preventDefault();
		var readCurr = $(this).attr("name");
		
		$.ajax({
			type: 'POST',
			url: 'readClick.php',
			data: {readThis:readCurr},
			dataType: 'html',
			success: function(response) {
				$('#main_content').html(response);
			}
		});
	});
	
	//this allows the stories link to be clicked to load stories back into the main content area
	$("#stories").click(function()
	{
		$.ajax({
			type: 'POST',
			url: 'story.php',
			data: {loaded:1},
			dataType: 'html',
			success: function(response) {
				$('#main_content').html(response);
			}
		});
	});
	
	$("#search").click(function()
	{
		var form = '<h5>Enter a User Name to See if They are in Our Stash!<h5><div id="searchArea2"> <form onsubmit="return false" action=""> <input type="text" name="search" id="SearchBox2"/><input type="image" src="img/search.png" id="SubmitSearch2"/></form></div>';	 
		$('#main_content').html(form);
	});
	
});

