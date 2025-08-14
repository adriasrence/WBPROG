<?php

$math = 80;
$science = 90;
$english = 90;

$ave = (math + science + english) / 3;
if ($ave <=90){
    if ($ave =>85){
        echo  "Your academic awardee";

    }
    elseif ($ave <=75) {
        echo  "medjo failed";
    }
    else {
        echo  "your final grade is $ave";
    }



}
else {
    
}




?>