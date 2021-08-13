<!DOCTYPE html>
<html>
<body>

<?php
$array1 = [1, 2, 3, "Four"];
$array2 = ["Five", 6, 7, 8];
$array3 = ["Nine", 10];

//Merging Array
$arrayMerge = array_merge($array1, $array2, $array3); 
echo"<br>";
print_r($arrayMerge); //show all of the value in its array
echo "<br>";
echo ("This is number : " . $arrayMerge[6]);
//Merging Array

echo"<br>";
echo"<br>";

//Associate Array (Different from normal array it's contain (key => value)

$array = ['B'=>'Black', 'W'=>'White', 'R'=>'Red', 'Y'=>'Yellow'];

print_r ($array);
echo"<br>";

echo ("My skin is so " . $array['B']);
echo "<br>";

/* add more value to your associate array*/
$array['P'] = 'Pink';
print_r($array);
echo "<br>";

echo ("all index of this array are " . count($array));
//Associate Array
echo"<br>";
echo"<br>";

?>

</body>
</html>