<!DOCTYPE html>
<html>
<body>
<?php
//For loop
$blogs = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];


for ($i=0; $i<count($blogs); $i++){

	echo $i+1 . ". ".$blogs[$i];
    echo '<br />';
    }
    echo '<br />'. '<br />';
    
//foreach loop (use to cycling an array) only used with array

foreach( $blogs as $value){

	echo array_search($value, $blogs) +1 . ". " . $value;
    echo '<br />';
    }
    echo '<br />'. '<br />'; //This code is the same as for loop above
  //Using foreach with Multidemensional Array
  $computer = [
  ['Name'=>'Asus', 'Country'=> 'China', 'Founder'=>'aaaa'],
  ['Name'=>'Dell', 'Country'=> 'USA', 'Founder'=>'bbbb'],
  ['Name'=>'Lenovo', 'Country'=> 'France', 'Founder'=> 'cccc'],
  ['Name'=>'MSI', 'Country'=> 'China', 'Founder'=> 'dddd']
 ];
 
 echo '<br />'.'<br />';
foreach($computer as $ComputerDetails){ // use to cycling value from an array
 echo strtoupper ($ComputerDetails['Name']). " - " . $ComputerDetails['Country'] . " - " . $ComputerDetails['Founder'];
 echo '<br />';
}
 ?>
</body>
</html>