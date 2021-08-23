
 <html>
	<head>
		<style>
			
		</style>
	</head>
	
     <body>
        <?php
			//Creating Function
			function creatingFunction(){
				echo 'Hello World <br />';
			}
			//to call function
			creatingFunction();
			
			//Creating Function with parameter
			function multiply($x, $y){
				echo $x*$y.'<br />';
			}
			multiply (3, 6); //result is 18
			
			//Creating function with return keyword
			function square($a){
				$b = $a*$a;
				return $b.'<br /> ';	
			}
			echo 'The square of 6  is: '.square(6); //result is 36
			
			//creating function and call it as an array
			function formatPhone($phone){
			// use {$phone["name"]} and {$phone['price']} to create a property to parameter and u can call it like Associative array.
			return "{$phone['name']} is costs $ {$phone['price']}";
			}
			//To call
			echo formatPhone(['name'=>'Iphone','price'=> 975]);
			?>
			
			
			
		</h1>
    </body>
</html>