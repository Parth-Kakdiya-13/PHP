<?php
// Develop a PHP script that takes a sentence as input and counts the number of vowels in
// it.

$str = "This is a vowel sentence";
$vowel = array('a','e','i','o','u');
if(in_array($vowel,$str)){
    echo "sebtence containce vowels";
}else{
    echo "not"
}


?>