<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*data types are a special characters and symbols used to store data
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
/*A Variable is a named memory location
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/


$name="Aisha";

$age=20;

$favfood="pizza";

$gender='female';


echo " Hello My name is $name am $age yrs old my favourite food is $favfood and my gender is $gender<br>"; 

$cars=8;
$momcars=2;
$brocars=2;
$dadcar=1;
$remainingcars= $cars-($momcars+$brocars+$dadcar);
echo "$remainingcars";


