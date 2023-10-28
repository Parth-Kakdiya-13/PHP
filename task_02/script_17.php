<?php
//Create a PHP script to check if a given year is a leap year and display the result
$year = 2021;
if($year % 4 ==0 || $year % 400 == 0 && $year % 100 !=0){
    echo "The year is leap year"
}else{
    echo "The year is not leap";
}


?>