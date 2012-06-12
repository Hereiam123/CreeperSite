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
	print "<p>Click User name to get Allegation Information. </p><br/>";
	
	if($num_results<=0)
	{
		print "There are no results for user name ".$searchName;
	}
	else
	{
		mysql_data_seek($result,0);
		print "<div id='theResults'>";
		while($row2 = mysql_fetch_array($result))
		{
			print "<p id='".$row2['creepUserName']."'> User Name: ".$row2['creepUserName']."</p>";
		}
		print "</div>";
	}
	mysql_close();
}

else if($getTags==1)
{
	$query="SELECT * FROM creeperData WHERE creepUserName LIKE '%$userClick%'";	
	$result=mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
		print "<p>User Name:" .$userClick."<br/>";
		print $userClick."'s Allegations: ".$row['Tag(s)']."</p>";
	}
	mysql_close();
}
?>


