<?php
	//session
	if(isset($_POST['submit'])){
		
		//first thing we need to start the session
		session_start();
		
		//give the session name by input from html
		$_SESSION['name'] = $_POST['text'];
		//now we have stored 'text value' in a session variable called 'name';
		
		echo $_SESSION['name'];
		   /* if ..........{
            session_unset(): //to remove session
        } */
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
		<input type="submit" name="submit" value="SUBMIT">
	</form>

</body>
</html>