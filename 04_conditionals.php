<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */
//Operators are special characters and symbols that are used to perform operations on statements and operands
//Types of operators

//Arithmetic operators- are operators that are used to carry out arithmetic operations
//eg +,-,*,/
//example
$desks = 20;
$chairs = 25;
$furnitures = $desks + $chairs;
//echo $furnitures;

//Logical operators-are operators that are used to
//And(||) logical operator -only tends to execute something if both conditions are met
//Or($$) logical operator -tends to execute if either or both conditions are met
//Not(!) logical operator -refuses the current state 

//Comparison operators-are used to compare characters and symbols
//Examples of comparison operators
/*
          < Less than
          > Greater than
          <= Less than or equal to
          >= Greater than or equal to
          == Equal to
          === Identical to
          != Not equal to
          !== Not identical to
        */

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */


$team1 = 89;
$team2 = 85;
//if statement
if ($team1 > $team2) {
 echo ("team1 is greater than team2<br>");
}
//if-else statement
if ($team1<$team2) {
  echo ("team1 is greater than team2");
}else{
  echo("team2 is greater than team1<br>");
}
//if else if statement
$age=50;
if($age<30){
  echo("your age is less than 30");
}elseif($age>30 && $age<40){
  echo("your age is between 30 and 40");
}elseif($age>40 && $age<50){
  echo("your age is between 40 and 50");
}else{
  echo("your age is greater than 50<br>");
}
//write a simple php program to check whether one is eligible to vote or not
$minor=19;
if($minor<18){
  echo("you are not eligible to vote <br>");
}else{
  echo("you are eligible to vote<br>");
}
//write a simle php program to check whether a number is positive negative or zero
$number=1;
if($number<0){
  echo("the number is negative");
}elseif($number>0){
  echo("the number is positive<br>");
}else{
  echo("the number is zero");
}
$favfood="pizza";
switch($favfood){
  case 'ugali':
    echo("my fav food is ugali");                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
  break;

  case 'uji':
    echo("my fav food is uji");
  break;

  case 'mboga':
    echo("my fav food is mboga");
  break;

  case 'fish':
    echo("my fav food is fish");
  break;

  case 'githeri':
    echo("my fav food is githeri");
  break;

  default:
    echo("my fav food is pizza");
}