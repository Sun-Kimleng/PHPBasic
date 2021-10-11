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
    
    //clone an object with some properties
    public function __clone()
    {
    	//after clone we can add more string to your object properties
   		$this->name = $this->name .' (can add more words)';
    }
    
    //destruct all properties when the work is done
    public function __destruct()
    {
    	echo '<br />'.'All properties has been 				removed';
    }
    //function
    public function stuDetail()
    {
    	return "Student Name: {$this->name} <br />
        Age: {$this->age} <br />";
    }    
}

$studentA = new student('Leng Leng', 21);

echo $studentA->stuDetail().'<br />';

//using clone 
$studentB = clone $studentA;

echo $studentB->stuDetail();