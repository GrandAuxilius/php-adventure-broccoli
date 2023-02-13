<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->

 <?php

function median($arr) {
rsort($arr);
$length = count($arr);
if ($length % 2 == 0) {
$median = ($arr[$length / 2 - 1] + $arr[$length / 2] ) / 2;

}else{

$median = $arr [($length - 1) /2];
}

return $median;

}
echo 'Enter only numbers with spaces between them: ';
$input = trim(fgets(STDIN));
$arr = explode(' ', $input);
$median = median($arr);

echo 'The median is ' . $median . "\n";


?>









