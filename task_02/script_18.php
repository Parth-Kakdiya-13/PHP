<?php
//Write a PHP script that generates a random number between 1 and 10 and lets the user
// guess it.
$num = rand()*10;
echo $num;
$user = 5;

if($user == $num){
    echo "You guess right number";
}else{
    echo "Try again";
}


?>