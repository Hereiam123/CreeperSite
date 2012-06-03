<?php

include('config.php');

$host=mysql_connect($databaseHostName,$databaseUserName,$databaseUserPassword);
mysql_select_db('4104e',$host);


$readMoreNum=$_GET['readMoreNum'];

if(!$readMoreNum)
{
	$readMoreNum=-1;
}

$loggedOn=$_GET['loggedOn'];

if($loggedOn==true)
{
	print "<a href='story.php?loggedOn=false'>Change Logged On status to False</a></br>";
}
else if($loggedOn==false)
{
	print "<a href='story.php?loggedOn=true'>Change Logged on status to True</a></br>";
}


$numStories=10;
$currStoryNum=0;

while($currStoryNum<=$numStories)
{
	$query="SELECT content FROM stories WHERE id = '$currStoryNum'";
	$result=mysql_query($query);
	$result=mysql_fetch_array($result);
	if($readMoreNum==$currStoryNum)
	{
		print $result[0]."<br/>";
		if($loggedOn==true)
		{
			print "<form>Comment: <br/><input type='text' name='contentBox' size='300' /><input type='submit' value='Submit'/></form>";
		}
		else
		{
			print "<a href=''>You must be logged in make comments...</a><br/><br/>";
		}
	}
	else
	{
		print substr($result[0],0,200).'...   ';
		print "<a href='story.php?readMoreNum=$currStoryNum'>Read More</a><br/><br/>";
	}
	$currStoryNum++;
}

?>
