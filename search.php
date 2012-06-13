<?php

include('config.php');

$host=mysql_connect($databaseHostName, $databaseUserName, $databaseUserPassword);

mysql_select_db('4104e',$host);

$searchName=$_GET['searchText'];
$userClick=$_GET['userName'];
$getTags=$_GET['getTags'];
		
if($getTags==0)
{
	$query="SELECT * FROM creeperData WHERE creepUserName LIKE '%$searchName%'";
	$result=mysql_query($query);
	$row = mysql_fetch_array($result); 
	$num_results = mysql_num_rows($result); 
	print "<h5>Click User name to get Allegation Information. </h5><br/>";
	
	if($num_results<=0)
	{
		print "There are no results for user name ".$searchName;
	}
	else
	{
		mysql_data_seek($result,0);
		while($row2 = mysql_fetch_array($result))
		{
			print "<a name='".$row2['creepUserName']."' class='searchResult'> User Name: ".$row2['creepUserName']."</a><br/>";
		}
	}
	mysql_close();
}

else if($getTags==1)
{
	$query="SELECT * FROM creeperData WHERE creepUserName = '$userClick'";	
	$result=mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
		print "<p>User Name: " .$userClick."<br/>";
		print "Allegations against ".$userClick." : ".$row['Tag(s)']."</p>";
	}
	mysql_close();
}
?>


