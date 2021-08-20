<!DOCTYPE html>
<html>
<body>

<?php
$computer = [
  ['Name'=>'Asus', 'Country'=> 'China', 'Founder'=>'aaaa', 'budget'=>1460],
  ['Name'=>'Dell', 'Country'=> 'USA', 'Founder'=>'bbbb', 'budget'=>2000],
  ['Name'=>'Lenovo', 'Country'=> 'France', 'Founder'=> 'cccc', 'budget'=>1300],
  ['Name'=>'MSI', 'Country'=> 'China', 'Founder'=> 'dddd', 'budget'=>1700]
 ];
 
 foreach ($computer as $computers){
	 echo $computers['Name'].'<br .>'; //echo all Name values of multidemension array
	 if($computers['Name'] === 'Lenovo'){
		 break; // stop looping if 'lenovo' value is came
	 }
 }
 echo '<br />'.'<br />';
 //or we can using this below if you don't want lenovo value to comes
 
  foreach ($computer as $computers){
	 
	 if($computers['Name'] === 'Lenovo'){
		 break; // stop looping if 'lenovo' value is came
		 
	 }
	 echo $computers['Name'].'<br .>'; //echo all Name values of multidemension array
  }
?>

</body>
</html>