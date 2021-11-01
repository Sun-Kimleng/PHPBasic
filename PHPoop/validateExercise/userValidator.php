<?php

    // create a user validator class to handle validation
    // constructor which takes in POST data from form 
    // check required "fields to check"are present in the data 
    // create methods to validate individual fields
    // -- a method to validate a username
    // -- a method to validate an email
    // return an error array once all checks are done

    class UserValidator {
        
        private $data; // an array contain all data from input fields
        private $errors=[]; // an array store the error data when error occurs
        private static $fields=['username', 'email']; // all required fields

        public function __construct($post_data){
            $this->data = $post_data;

        }
        
        //validate the Form
        public function validateForm(){
            foreach(self::$fields as $field){
                if(!array_key_exists($field, $this->data)){
                    trigger_error("this{$field} doesn't exists."); //shows message
                    return; //for message
            }
        }
        
        //call both below function
        $this->validateUsername();
        $this->validateEmail();
        return $this->errors;

        }

        //Validate the username
        private function validateUsername(){    
            //trim is used to clear white space from the left and right for easy validation
            $val = trim($this->data['username']);

            if(empty($val)){
                //add message to error array in the username index
                $this->addError('username', 'Username cannot be empty');
            }else{
                if(preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)){
                $this->addError('username', 'Username must be 6-12 chars and alphanumerics');
                }
            }

        }

        //validate the email
        private function validateEmail(){

            //trim is used to clear white space from the left and right for easy validation
            $val = trim($this->data['email']);
            if(empty($val)){
                //add message to error array in the username index
                $this->addError('email', 'Email cannot be empty');
            }else{
                if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
                $this->addError('email', 'Email must be 6-12 chars and alphanumerics');
                }
            }
        }

        //add the error the error array
        private function addError($key, $val){
            //add to array // $val = value
            $this->errors[$key]= $val;

        }
    }
?>