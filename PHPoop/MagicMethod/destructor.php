<!DOCTYPE html>
<html>
<body>

<?php
class student
{	
	//properties
	public $name;
    public $age;
    
    //constructor
    public function __construct($name, $age)
    {
    	$this->name = $name;
    	$this->age = $age;
    }
    //destruct all properties when the work is done
    public function __destruct()
    {
    	echo '<br />'.'All properties has been removed';
    }
    //function
    public function stuDetail()
    {
    	return "Student Name: {$this->name} <br />
        Age: {$this->age} <br />";
    }    
}

$studentA = new student('Leng Leng', 21);

echo $studentA->stuDetail();

var_dump($studentA); //show details about a varaible

//We can you sleep() to pause before destuct() magic method is executed
//sleep(5); //means pause 5 seconds before executed

//We can also use unset() instead of destuct()
//unset($student)

?>

</body>
</html>