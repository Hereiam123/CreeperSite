<?php
	include('config.php');
	//connect to the database
	$connection=mysql_connect("localhost","$databaseUserName","$databaseUserPassword")
		or print "connect failed because ".mysql_error();  
		
    mysql_select_db("$databaseName",$connection)
		or print "select failed because ".mysql_error();

		
if (isset($_POST['submit'])){
	$userName = mysql_real_escape_string($_POST['userName']);
	$password = mysql_real_escape_string($_POST['password']);
	
	$addUser = mysql_query("INSERT INTO `userlist` (`userName`,`userPassword`) VALUES ('$userName','$password')");

	mysql_close($connection);

/*	setcookie("isLoged", 'yes', time()+2419200);
	setcookie("userName", $userName, time()+2419200);*/

	echo("Thank you for joining Creeper Stash- please login on the main page.");
	exit();
}
?>

<HTML>
 <!--INSTEAD OF FORM ACTION SEND TO REGISTER PHP... CALL ABOVE FUNCTION registerUser() ON SUBMITAL -->
		<form action="" method="post" name="register" id="register">
						<h2>Please enter registration information: </h2>
						<p>Username:<input name="userName" type="text" id="userName"/></p>
                       	<p>Password:<input name="password" type="password" id="password"/></p>
						<p>Re-enter password:<input name="password2" type="password" id="password2" /></p>
		</form>
 </HTML>
 