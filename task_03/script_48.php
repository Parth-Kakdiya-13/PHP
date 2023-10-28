<?php

function myFunction($a,$b){
    return $a + $b;
}

$arr = array(1,2,3,4);

$a = array_reduce("myFunction",$arr);

?>