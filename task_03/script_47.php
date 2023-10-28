<?php
function myFunction($v){
    return $v * $v;
}
$arr = array(1,2,3,4,5);

print_r(array_map("myFunction",$arr));


?>