<?php

    //create class
    class user{
        public $username;
        public $age;
        public $email;

        public function __construct($username, $age, $email){
            $this->username = $username;
            $this->age = $age;
            $this->email = $email;
        }

        public function userDetail(){
            return 'Name: '.$this->username.'<br />'.
                    'Age: '.$this->age.'<br />'.
                    'Email: '. $this->email.'<br />';
        }
    }

    $userOne = new User('Leng Leng', 21, 'LengLeng@gmail.com');

    echo $userOne->userDetail();

    

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