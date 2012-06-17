<?php

include('config.php');

$host=mysql_connect($databaseHostName,$databaseUserName,$databaseUserPassword);
mysql_select_db('4104e',$host);

$loadedStoryTotal=$_POST['loaded'];

if(!$loadedStoryTotal)
{
	$loadedStoryTotal=1;
}

$newTotal=$loadedStoryTotal+2;

print "<h2>Latest Creeper Stories</h2>";

while($loadedStoryTotal<=$newTotal)
{
	$query="SELECT * FROM stories WHERE id = '$loadedStoryTotal'";
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);
		
	print "<h5>".$row['Header']."</h5>";
	print "<h6>".$row['Date Added']."</h6>";
	print "<p>".substr($row['content'],0,200)."</p>";
	print "<a name='".$row['id']."' class='readMore' href='#'> Read More </a><br/><br/>";
	
	$loadedStoryTotal++;
}

mysql_close();


?>
