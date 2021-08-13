<?php
$MyWife = 'This is my Wife';
$num	= 17;
?>
<html>
  	<head>
      	<title>
      </title>
      	
      <style>
        .color{
      	color: red;
      }
      </style>
  </head>
  <body>
    
    	<?php
   
  echo "<div >". 
  "<span class='color'>".
  str_replace('Wife','girlfriend', $MyWife)." ".
  "</span>".
  'and she is '.$num.' '. 'Years old'."</div>";
  
 echo "<br>";
 
 //Create String
 $a = "Hello";
 $b = "World";
 
 echo ($a." ".$b);
 echo "<br>";
 //Create String...
 echo "<br>";
 echo "<br>";
 //Strlen(Find String Length), str_replace(replace any String),.....
 
 $StringLength = 'How many number of length of this string';
 $length = strlen($StringLength);
 echo ("the length of \$Stringlength is ". $length);
 echo "<br>";
 
 $love = 'I love me';
 $love2 = str_replace ('me','you', $love);
 echo ("I've changed I love me to ". $love2."!");
 echo "<br>";
 
 $ChangeToUpper = 'UPPer case';
 $ChangeToLower= 'LOWer CaSE';
 echo ("This is ". strtoupper($ChangeToUpper). " and this is ". strtolower($ChangeToLower));
 
 //Strlen(Find String Le........
 
  ?>
  </body>
</html>