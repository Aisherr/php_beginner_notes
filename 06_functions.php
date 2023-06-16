<?php
/* ------------ Functions ----------- */
/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope
/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
//Example
function hellomessage(){
  echo "Hello Aisha<br>";

}
hellomessage();
function addingfunction($num1,$num2){
  $sum=$num1+$num2;
  echo "print $sum <br>";
}
addingfunction(50,20);

function Myname($fname,$lname){
  $fullname=$fname.$lname;
  echo "print $fullname<br>";
}
Myname("Aisha","Mohamed"); 

function subtraction($num1,$num2){
  $subtract=$num1-$num2;
  echo "print $subtract <br>";
}
subtraction(50,30);
subtraction(86,33);

function multiplication($num3,$num4){
  $multiply=$num3*$num4;
  echo "print $multiply <br>";
}
multiplication(9,5);
multiplication(20,3);


