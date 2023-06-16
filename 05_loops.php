<?php

/* -------- Loops & Iteration ------- */
//A loop is a conditional statement that repeats itself until a certain condition is met.

/* ------------ For Loop ------------ */
/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
  The php for loop allows the user to put all the loop related statements(initialize;condition/test;++/--)
*/
//Example of for loop
for($figure=1;$figure<=5;$figure++){
  echo "my output number is : $figure";
}

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
//Example of a while loop
$num=1;
while($num<=5){
   echo "increment number: $num <br>";
   $num++;
}


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
//Example of do while loop
$value=10;
do{
  echo "increment number: $value <br>";
  $value ++;
}while($value<=20);



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
  The loop works only on arrays and is used to loop through each key/value pair in an array
*/
