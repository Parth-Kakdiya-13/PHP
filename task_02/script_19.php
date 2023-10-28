<?php
// Develop a PHP script that takes a positive integer as input and checks whether it is a
// prime number.
$num = 10;
if($num > 1 && $num % $num == 0){
    echo "The number is prime";
}else{
    echo "The number is not prime";
}


?>