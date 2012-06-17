<?php


include('config.php');

$host=mysql_connect($databaseHostName,$databaseUserName,$databaseUserPassword);
mysql_select_db('4104e',$host);

$readHere=$_POST['readThis'];

$query="SELECT * FROM stories WHERE id = '$readHere'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
		
print "<h2> Your Selected Story</h2>";
print "<h5>".$row['Header']."</h5>";
print "<h6>".$row['Date Added']."</h6>";
print "<p>".$row['content']."</p><br/><br/>";
	
mysql_close();

?>