<?php
	
include('config/db_connection.php');	
	//Write query for all pizzas
	$sql = 'SELECT id, title , ingredients FROM pizzas ORDER BY created_at';
	$result = mysqli_query($conn, $sql);
	
	//fetch the result from query
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//now pizzas has been convert to an array
	//$pizzas = ['id'=>1, 'ingredients' => 'Tomatoes, Hotdogs'];
	
	//remove quere from memory 
	mysqli_free_result($result);
	
	//close the connection from db
	mysqli_close($conn); 
	
//	print_r();

//convert a stirng seperate by comma , to an array
//	explode (',', $pizza[0]['ingredients']);
	
	
?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php');?> <!-- header -->

<h4 class="center gret-text">Pizza!</h4>

<div class="container">
	<div class="row rows">
	
		<?php foreach($pizzas as $pizza): ?>
		<div class="col s6 md3">
			<div class="card z-depth-0">
					<div class="card-content center">
						<h6> <?php echo htmlspecialchars($pizza['title']); ?>  </h6>
						<ul>
							<?php foreach(explode(',', $pizza['ingredients']) as $ing){ ?>
							<li><?php echo htmlspecialchars($ing); ?> </li>
						<?php } ?>
						</ul>
						</div>
						<div class="card-action right-align">
							<a class ="brand-text" href="#">more info</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
			
	<?php if(count($pizzas) >=3){ ?>
	<p>there are 3 or more pizzas</p> 
	<?php } else{ ?>
	<p>there are less than 3 pizzas</p>
	<?php } ?>
			
		
	</div>	
<?php include('templates/footer.php');?> <!-- footer -->

</body>
</html> 