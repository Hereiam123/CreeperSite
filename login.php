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
		
		$userQuery = mysql_fetch_row(mysql_query("SELECT COUNT(*) FROM " . $tableName .
		" WHERE `" . $userNameField . "`='$userName' AND `" . $userPasswordField . "`='$password'"));
	
		if($userQuery[0] > 0){
			/* Disconnect from database */
			mysql_close($connection);
			
			setcookie("isLoged", 'yes', time()+2419200);
			setcookie("userName", $userName, time()+2419200);
			
			header("Location: $loginPage");
			exit();
		} else {
			$message = 'Invalid username and/or password!';
			print $message;
		}
	}
	
?>

<HTML>
		<form action="" method="post" name="login" id="login">
					<h2>Login:</h2>
                    <p>Username:<input name="userName" type="text" id="userName"></p>
                    <p>Password:<input name="password" type="password" id="password"></p>
                    <input name="submit" type="submit" id="Submit" value="Login">
		</form>
 </HTML>