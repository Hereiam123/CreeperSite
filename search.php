<?php

include('config.php');

	$host=mysql_connect($databaseHostName, $databaseUserName, $databaseUserPassword);

	mysql_select_db('4104e',$host);

	$searchName=$_GET['search'];
	$userClick=$_GET['user'];
	$getTags=$_GET['getTags'];
	
	if($getTags==1)
	{
		$query="SELECT * FROM creeperData WHERE creepUserName LIKE '%$userClick%'";	
		$result=mysql_query($query);
		$result=mysql_fetch_array($result);
		
		print "User Name:" .$userClick."<br/>";
		print $userClick."'s Allegations: ".$result["Tag(s)"];
		mysql_close();
	}
	else
	{
		$query="SELECT * FROM creeperData WHERE creepUserName LIKE '%$searchName%'";

		$result=mysql_query($query);
		$result=mysql_fetch_array($result);

		if(!$result)
		{
			print "There are no results for userName ".$searchName.".";
		}
		else
		{
			print "User Name: <button style='border:none; background:transparent; cursor: pointer;' id='".$searchName."'>".$searchName."</button>";
		}
		mysql_close();
	}

?>

