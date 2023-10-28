<?php
$arr = array(
    array(
        "id"=> 101,
        "first_name"=>"Parth",
        "last_name"=>"Kakdiya",
    ),
    array(
        "id"=> 102,
        "first_name"=>"Darshil",
        "last_name"=>"Nathani",
    ),
    array(
        "id"=> 103,
        "first_name"=>"Krupali",
        "last_name"=>"Akbari",
    ),
    array(
        "id"=> 104,
        "first_name"=>"Neha",
        "last_name"=>"Dobariya",
    ),
    array(
        "id"=> 105,
        "first_name"=>"Visakha",
        "last_name"=>"Kasundra",
    ),
);

$last_name = array_column($arr,"first_name");

print_r($last_name);


?>