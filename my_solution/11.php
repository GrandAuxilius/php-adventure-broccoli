<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->

<?php

$num = [];
echo 'Enter only numbers with spaces between them: ';

$input = trim(fgets(STDIN));
$num = explode(' ',$input);
$sum = 0;

foreach ($num as $sol) {
$sum += $sol;
} 

$ave = $sum / count($num);


echo "The number's average is " .
     number_format((float) $ave, 2, '.', '');



?>