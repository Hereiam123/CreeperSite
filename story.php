<?php

include('config.php');

$host=mysql_connect($databaseHostName,$databaseUserName,$databaseUserPassword);
mysql_select_db('4104e',$host);

$loadedStoryTotal=$_GET['loaded'];
$ifReadMore=$_GET['loadStory'];
$readThis=$_GET['readThis'];

if(!$loadedStoryTotal)
{
	$loadedStoryTotal=1;
}

if(!$ifReadMore)
{
	$ifReadMore=0;
}

if($ifReadMore==0)
{
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
		print "<a name='".$row['id']."' class='readMore'> Read More </a><br/><br/>";
	
	
	/*if($readMoreNum==$currStoryNum)
	{
		print $result[0]."<br/>";
		if($_COOKIE['isLoged']=='yes')
		{
			print "<form>Comment: <br/><input type='text' name='contentBox' size='300' /><input type='submit' value='Submit'/></form>";
		}
		else
		{
			print "<a href=''>You must be logged in make comments...</a><br/><br/>";
		}
	}*/
		$loadedStoryTotal++;
	}
}

else if($ifReadMore==1)
{
		$query="SELECT * FROM stories WHERE id = '$readThis'";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		
		print "<h5>".$row['Header']."</h5>";
		print "<h6>".$row['Date Added']."</h6>";
		print "<p>".$row['content']."</p><br/><br/>";
}

?>
