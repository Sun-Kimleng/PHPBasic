<html>
  	<head>
      	<title>
      </title>
      	
      <style>
        
      </style>
  </head>
  <body>
    	<?php
//Multidimensional Array

$blogs = [
    ['1Of1', '1Of2', '1Of3'],
    ['2Of1', '2Of2', '2Of3'],
    ['One'=>'3Of1', 'Two'=>'3Of2', 'Three'=>'3Of3']
  ];
  print_r($blogs);
  echo '<br>';
  echo '<br>';
  
  $TwoOfOne = $blogs[1][0];
  echo ("This is ". $TwoOfOne);
  echo '<br>';
  
  $ThreeOfThree = $blogs[2][Three];
  echo ("This is ". $ThreeOfThree);
  echo '<br>';
  echo '<br>';
  
  
  // Add another Array to your Multidemensional Array
  $blogs[] = ['4Of1', '4Of2', '4Of3'];
  print_r ($blogs);
  echo '<br>';
  echo '<br>';
  
  // Using Array_pop to pop off all the first array and leave the last one
  $popped = array_pop ($blogs);
  print_r($blogs);
  
  ?>
  </body>
</html>