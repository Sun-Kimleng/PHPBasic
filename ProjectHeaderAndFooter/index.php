<?php
	$conn = mysqli_connect('localhost','leng','12345','LengLengPizza');
	
	//check connection works or not
	if(!$conn){ //if connection is not work
	echo 'Connection error: ' . mysqli_connect_error;
	}
	/* or 
	if ($conn->connect_error){ //note that -> just like dot in javascript ex: name.style.color =  "red";
		die("Connection failed: ". $conn ->connect_error;
	*/
?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php');?> <!-- header -->
<?php include('templates/footer.php');?> <!-- footer -->

</body>
</html> 