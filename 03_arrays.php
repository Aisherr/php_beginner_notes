<?php
/* ----------- Arrrays ----------- */


/*
  Arrays are collection of items/data of the same datatype stored at contegious memory location.
  Arrays hold multiple values. Each value in an array is called an "element"
*/
//Examples of an array
//Types of Arrays
   //Index Arrays
     //simple Array of numbers
         $numbers=[1,2,3,4,5,6,7,8,9,];
    //simple Array of strings
         $colors=["yellow","white","red","green","blue","purple"];
         $colorss="colorless";
//echo $colorss;
//echo $colors[4];

//var_dump($colors);
//print_r($numbers);
      //Associative Arrays-allow us to use named keys to identify values

      $rangi=[
        'red' => '#f00' ,
        'green' => '#0f0',
        'blue' => '00f'
      ];
      //echo $rangi['red'];
      //var_dump($rangi);

      //multi-dimensional Arrays-often used to store data in a table form

      $people = [
        $person1=[
          'firstname' => 'Aisha',
          'lastname' => 'Mohamed',
          'email' => 'aisher123@gmail.com'
        ],
        $person2=[
          'firstname' => 'Yasmin',
          'lastname' => 'Ahmed',
          'email' => 'yasmin345@gmail.com'
        ],
        $person3=[
          'firstname' => 'jacqueline',
          'lastname' => 'njoki',
          'email' => 'njoki832@gmail.com'
        ]

        ];
        //var_dump($people);
        echo $people[1]['email'];


     


