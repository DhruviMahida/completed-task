<?php
function isLeapYear($year){
    if(!is_numeric($year)){
        echo "Stirng is not allowed. Input should be number.";
        return;
    }
}
if(($year%4 == 0 && $year%100!=0)) || $year%400==0{
    echo $year, "is a Leap year";
} else{
    echo $year, "is not Leap year";

}
}
