<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

//Get array length
$fruits=array("Mango","Apple","Watermelon","Oranges","Grapes","Pears","Kiwi","Banana","Strawberries","Tree tomato");
//echo count($fruits);

//Search element in an array
echo in_array("Pineapples", $fruits);

//Add element to an array
$fruits[]="Pineapple";
array_push($fruits,"Dates","Groundnuts","Coconut");
print_r($fruits);

//Removing an element from an array
array_pop($fruits);//function to remove last element in an array
array_shift($fruits);//function to remove first element in an array
unset($fruits[2]);//removes specific element in an array
print_r($fruits);





