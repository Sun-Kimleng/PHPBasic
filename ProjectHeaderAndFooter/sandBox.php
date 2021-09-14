<?php
	//session
	if(isset($_POST['submit'])){
		//cookie for gender (check this before the session is started)
		setcookie('gender', $_POST['gender'], time()+86400);
		
		
		//first thing we need to start the session
		session_start();
		
		//give the session name by input from html
		$_SESSION['name'] = $_POST['text'];
		//now we have stored 'text value' in a session variable called 'name';
		
		//echo $_SESSION['name'];
		   /* if ..........{
            session_unset(): //to remove session
        } */
		
		header('Location: index.php');
	}

?>


<!DOCTYPE html>
<html>
        <head>
            <title>Sessions</title>
        </head>
<body>

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="text">
		<select name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
		<input type="submit" name="submit" value="SUBMIT">
	</form>

</body>
</html>