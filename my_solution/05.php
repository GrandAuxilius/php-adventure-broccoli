<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
 -->

 <?php 

$input = readline('Input an array of numbers: ');
$nums = explode(' ', $input);
$sum = 0;
foreach($nums as $x) {
  $sum += $x;
}
echo "The sum of the numbers is: " . $sum;

?>