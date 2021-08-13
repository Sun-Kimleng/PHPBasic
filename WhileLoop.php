<?php

$computer = [
  ['Name'=>'Asus', 'Country'=> 'China', 'Founder'=>'aaaa'],
  ['Name'=>'Dell', 'Country'=> 'USA', 'Founder'=>'bbbb',],
  ['Name'=>'Lenovo', 'Country'=> 'France', 'Founder'=> 'cccc'],
  ['Name'=>'MSI', 'Country'=> 'China', 'Founder'=> 'dddd']
 ];
echo count($computer).'<br .>';//count number of array in demensional array
echo count($computer[2]).'<br .>';//count number of value of an array
echo $computer[0]['Name'];//result is Asus if you want to output all name use foreach loop

echo '<br />'.'<br />';

//Using While loop
$i =0;
while ($i < count($computer)){
	echo $computer[$i]['Name'].'<br />';
    $i++;
}

?>
<!DOCTYPE html>
<html>
<head>
	<style>
    .h2{
    	font-size: 30px;
        font-weight: bold;
        margin-bottom: -20px;
        }
    </style>
</head>
<body>
	<h1>Computer</h1>
	
    <div>
    <?php foreach($computer as $value){ ?>
    <p class="h2"><?php echo $value['Name']; ?><p>
    <p><?php echo '- '.'Country: '.$value['Country'].'<br />'. '- '.'Founder:' .$value['Founder'];?></p><br />
    <?php } ?>
    </div>
</body>
</html>