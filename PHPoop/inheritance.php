<?php

    //create class
    class user{
        public $username;
        public $age;
        public $email;
        public $role ='Member';

        public function __construct($username, $age, $email){
            $this->username = $username;
            $this->age = $age;
            $this->email = $email;
        }
        

        public function userDetail(){
            return 'Name: '.$this->username.'<br />'.
                    'Age: '.$this->age.'<br />'.
                    'Email: '. $this->email.'<br />'.
                    'Role: '.$this->role.'<br /> <br />';
        }
        public function emailChange($email){
            //check if there is @symbol in 
            if(strpos($email, '@') > -1){
               return $this->email = $email;
            }
        }
        
    }


    class adminUser extends user{
        //more properties
        public $level;
        //overiding properties to user Class
        public $role ='Admin';
        
        //constructor 
        public function __construct($username, $age, $email, $level){
            $this->level = $level;
            parent::__construct($username, $age, $email);

        }
        
        public function userDetail(){
            return 'Name: '.$this->username.'<br />'.
                    'Age: '.$this->age.'<br />'.
                    'Email: '. $this->email.'<br />'.
                    'Role: '.$this->role.'<br />'.
                    'Level: '.$this->level.'<br /><br />';
        }
    }

    //User Class object
    $userOne = new user('Leng Leng', 21, 'LengLeng@gmail.com');  

    // echo $userOne->userDetail();
    $userOne -> emailChange('Emailchanged@gmail.com');
    echo $userOne -> userDetail();

    //AdminUser class object
    $adminOne = new adminUser('Eii Eii', 18, 'EiiEii@gmail.com',9);
    echo $adminOne->userDetail();


    

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    
</body>
</html>