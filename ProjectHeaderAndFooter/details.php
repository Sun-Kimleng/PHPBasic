<?php 
include('config/db_connection.php');
//delete a record
if(isset($_POST['delete'])){
	$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
	
	//create query
	$sql = "DELETE FROM pizzas WHERE id = $id_to_delete";
	//if mysqli_query passing in this connection
	if(mysqli_query($conn, $sql)){
		//success;
		header('Location: index.php');
	}else{
		//failure;
		echo 'query error: '. mysqli_error($conn);
	}
}

// check GET request id parameter
if(isset($_GET['id']/*it is id from url*/)){
	
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	
	//create query
	$sql = "SELECT * FROM pizzas WHERE id = $id";
	
	//get query result
	$result = mysqli_query($conn, $sql);
	
	//fetch result in array format
	$pizza = mysqli_fetch_assoc($result); //return only 1 result
	//different from mysqli_fetch($result, MYSQLI_ASSOC); 
	
	//free memory
	mysqli_free_result($result);
	//close connection
	mysqli_close($conn);
	
	//now we got an pizza array pizza['id'=> '$id', 'title'=>'?'....];
// print_r($pizza);
}

?>

<!DOCTYPE html>
<html>
<?php include('templates/header.php');?> <!-- header -->

<div class="container center">
	<!-- there is only 1 value of the array so we don't need foreach -->
	<?php if($pizza){ /*if $pizza passing this connection*/ ?>
	
		<h4><?php echo htmlspecialchars($pizza['title']); ?> </h4>
		
		<p>Created by: <?php echo htmlspecialchars($pizza['email']); ?>
		<p><?php echo date($pizza['created_at']); ?>
		
		<h5>Ingredients:</h5>
		
	<p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>
	
	<!-- DELETE FORM -->
	<form action="details.php" method="POST">
		<input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
		<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
	</form> 
	
	<?php } else{ ?>
		
		 <h5>No such pizza exist</h5>
		
	<?php } ?>
</div>

<?php include('templates/footer.php');?> <!-- footer -->
</body>
</html>