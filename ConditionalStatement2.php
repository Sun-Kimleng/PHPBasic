
<!DOCTYPE html>
<html>
	<head>
		<style>
			.comDetails{
				margin-left: 60px;
			}
		</style>
	</head>
<body>
<?php
?>


</body>
</html><!DOCTYPE html>
<html>
<body>
<?php
$computer = [
  ['Name'=>'Asus', 'Country'=> 'China', 'Founder'=>'aaaa', 'budget'=>1460],
  ['Name'=>'Dell', 'Country'=> 'USA', 'Founder'=>'bbbb', 'budget'=>2000],
  ['Name'=>'Lenovo', 'Country'=> 'France', 'Founder'=> 'cccc', 'budget'=>1300],
  ['Name'=>'MSI', 'Country'=> 'China', 'Founder'=> 'dddd', 'budget'=>1700]
 ];
	echo 'This is lower computer company\'s budget : '.'<br />';
 foreach ( $computer as $computerDetails){
	 if ($computerDetails['budget'] < 1500){
			echo "<span class='comDetails'>".'- '.$computerDetails['Name'] . '<br />'.'</span>';
		}
	 }
	echo 'This is upper computer company\'s budget : '.'<br />';
 foreach ( $computer as $computerDetails){
	 if ($computerDetails['budget'] > 1500){
			echo "<span class='comDetails'>".'- '.$computerDetails['Name'] . '<br />'.'</span>';
		}
	 }
	
	 
?>


</body>
</html>