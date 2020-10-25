<?php

/*
***********************************************************

Topic   : Program to fetch all keys in an array in PHP.
Author  : Chpaone09®
Date    : Oct 25, 2020

************************************************************
*/


$a = array(
"name"=> "abc",
"age"=> 25,
"roll_no"=> 1,
"designation"=> "Manager"
);

echo "<pre>";print_r(array_keys($a));

?>