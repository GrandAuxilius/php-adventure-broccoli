<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->

 <?php

 $num =readline ('Enter numbers with space: ');
 $sum = 0;

 for ($x = 0; $x < strlen ($num); $x++) {
 $sum += (int) $num[$x];
 
 }

 echo 'The sum of the digits is: ' . $sum;

 ?>