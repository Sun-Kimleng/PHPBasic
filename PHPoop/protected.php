<?php
    class person{
        public $name;
        protected $Role = 'Sivillian';

        public function __construct($name){
            $this -> name = $name;
        }

        public function getInfo(){
            return "Name: {$this->name} <br /> Role: {$this->Role}<br /><br />";
        }
    }

    class teacher extends person{

        //overiding
        protected $Role = 'Teacher';
    
    //constructor extends person class
    public function __construct($name){
        parent::__construct($name);
    }
    
    public function getInfo(){
        return "Name: {$this->name} <br /> Role: {$this->Role}<br /><br />";
    }
}
    
    $nameP = 'Eii Eii';

    $personOne = new person($nameP);
    $personTwo = new teacher('LengLeng');

    echo $personOne->getInfo();
    echo $personTwo->getInfo();
?>