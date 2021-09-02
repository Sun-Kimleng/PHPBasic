<?php

	if(isset($_POST['submit'])){
		// echo htmlspecialchars( $_POST ['email']);
		// echo htmlspecialchars(POST ['title']);
		// echo htmlspecialchars($_POST ['ingredients']) ;
		
		//check email 
		if(empty($_POST['email'])){
			echo 'An email is required <br />';
		}
		else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo 'Email must be valid <br />';
			}
		}
		//check title
		if (empty($_POST['title'])){
			echo 'A title is required <br />';
		}
		else{
			$title = $_POST['title'];
		if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
			echo 'your title allows only whitespace and letters <br />' ;
		}
			
		}
		//check email 
		if (empty($_POST['ingredients'])){
			echo 'At least one ingredient is required <br />';
		}
		else{
			$ingredient = $_POST['ingredients'];
			$ingredientRegExp = '/^([a-zA-Z\s]+)(,[\s*[\sa-zA-Z]*)*$/';
			if(!preg_match($ingredientRegExp, $ingredient))
				echo 'Your ingredient should be letters or white space';
		}
			
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
			<input type="submit" name="submit" value ="submit" class="btn brand z-depth-0">
		</div>
	</form>
<?php include('templates/footer.php');?> <!-- footer -->

</body>
</html>
