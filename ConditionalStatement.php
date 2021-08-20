<!DOCTYPE html>
<html>
<body>
<form method="POST" action="">
<label for="price"> Enter price
	<input type="text" id="price" name="price" placeholder="Enter as Dollar$">
</label>
<label for="btn">
	<button type="submit" name="btn">Calculate</button>
</label>
	<button type="reset">Reset</button>
	

</form>

<?php

if(isset($_POST['btn'])){ // Resolve the action on the same file 

$Price = $_POST['price'];
 //post from name
 

if ($Price < 5 or $Price == null){
	echo "You don't have enough money";
	}
else if ($Price == 5){
	echo "You have enough money";
	}
else if ($Price > 5){
    $Price -=5;
    echo "You have enough money, and here is your money return: " .$Price ."$";
    }
}
?>


</body>
</html>