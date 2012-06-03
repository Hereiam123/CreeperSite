<?php

include('config.php');

$host=mysql_connect($databaseHostName,$databaseUserName,$databaseUserPassword);

if(!$host)
{
	print "poop<br>/";
}

$counter=0;
mysql_select_db($databaseName, $host) or die( mysql_error() );

$content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu purus dolor. Phasellus eu egestas magna. Quisque dignissim arcu sit amet magna pharetra sodales. Maecenas ut risus tortor. Nunc et sem vitae enim vestibulum scelerisque. Ut non tincidunt nibh. Nullam ut turpis in massa sagittis placerat. Morbi eleifend, diam quis sollicitudin pellentesque, nibh est porttitor est, sit amet aliquet libero lectus sed augue. Aenean massa diam, ultrices a rhoncus a, tincidunt a purus. Duis sollicitudin dictum felis in tincidunt.
Aliquam blandit, justo at pellentesque laoreet, neque nisl elementum quam, in fermentum velit nulla quis eros. Ut id odio elit. Mauris. And this is more than 100 words.";

for($counter=0; $counter<=10; $counter++)
{
	print "Doing!";
	$query="UPDATE stories SET content='$content' WHERE id='$counter'";
	print $query."</br>";
	$result=mysql_query($query);
	if(!$result)
	{
		print "Invalid query:"  . mysql_error(); 
		print "Failure<br/>";
	}
}

mysql_close($host);
?>