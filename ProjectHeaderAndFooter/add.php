<?php
	include('config/db_connection.php');	
	$errors = ['email'=>'', 'title'=>'', 'ingredient'=>''];

	if(isset($_POST['submit'])){
		// echo htmlspecialchars( $_POST ['email']);
		// echo htmlspecialchars(POST ['title']);
		// echo htmlspecialchars($_POST ['ingredients']) ;
		
		//check email 
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required <br />';
		}
		else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email']= '*Email must be valid';
			}
		}
		//check title
		if (empty($_POST['title'])){
			$errors['title'] = 'A title is required <br />';
		}
		else{
			$title = $_POST['title'];
		if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
			$errors['title'] = '*Your title allows only whitespace and letters' ;
		}
			
		}
		//check ingredient
		if (empty($_POST['ingredients'])){
			$errors['ingredient'] =  'At least one ingredient is required <br />';
		}
		else{
			$ingredient = $_POST['ingredients'];
			$ingredientRegExp = '/^([a-zA-Z\s]+)(,[\s*[\sa-zA-Z]*)*$/';
			if(!preg_match($ingredientRegExp, $ingredient)){
				$errors['ingredient'] = '*Your ingredient should be letters or white space';
			}
		}
			
	
	
	if (array_filter($errors)){ // return true if there's  errors in form
	// echo 'Errors in form';
	}else{
	//	echo 'Form is valid';
	
	//value that we want to save into database	
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
	//SQL statement
	$sql = "INSERT INTO pizzas (title, email, ingredients) VALUES ('$title','$email','$ingredients') ";
	
	//save to db and check
	if(mysqli_query($conn, $sql)){
		//success
		header('Location: index.php');
	} else{
	//error
	echo 'query error: '.mysqli_error($conn);
	}
    
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
		<div class="red-text"><?php echo $errors['email']; ?></div>
		<label> Your Title: </label>
		<input type="text" name="title">
		<div class="red-text"><?php echo $errors['title']; ?></div>
		<label> Ingredients (comma Separted): </label>
		<input type="text" name="ingredients">
		<div class="red-text"><?php echo $errors['ingredient']; ?></div>
		<div class="center">
			<input type="submit" name="submit" value ="submit" class="btn brand z-depth-0">
		</div>
	</form>
<?php include('templates/footer.php');?> <!-- footer -->

</body>
</html>
