<?php

class weather{
    public static $tempConditions = ['cold', 'mild', 'warm'];

    //static Properties
    public static function celsiusToFarenheit($c){
        return $c = 9/5 + 32 ;
    }

    public function determineTempCondition($f){
        if($f < 40){
            return self::$tempConditions[0];
        }else if ($f < 70){
            return self::$tempConditions[1];
        }else{
            return self::$tempCondtions[2];
        }
    }
}
    

    //call normal function
    
    // $weather1 = new weather();

   
    // echo $weather1->tempConditions[0].': '. $weather1->celsiusToFarenheit(20);

    // echo '<br />';
    // //call by static function
    // echo $weather1->tempConditions[0] . ': ' . weather::celsiusToFarenheit(20);
    echo weather::determineTempCondition(35);
?>