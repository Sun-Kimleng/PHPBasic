<?php

	if(isset($_POST['submit'])){
		echo $_POST ['email'];
		echo $_POST ['title'];
		echo $_POST ['ingredients'];
		
	}

?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php');?> <!-- header -->

<section class="container grey-text">
	<h4 class="center">Add a Pizza</h4>
	<form class="white" action ="add.php" method="POST"> <!-- send data to its own file (php upon these code -->
		<label> Your Email: </label>
		<input type="text" name="email">
		<label> Your Title: </label>
		<input type="text" name="title">
		<label> Ingredients (comma Separted): </label>
		<input type="text" name="ingredients">
		<div class="center">
			<input type="submit" name="submit" value ="submit" class="btn brand z-depth-0"
		</div>
	</form>
<?php include('templates/footer.php');?> <!-- footer -->

</body>
</html>
