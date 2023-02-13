<!-- 
    Write a program that takes a string as input and outputs the number of words in the string.
 -->

<?php

function w ($sentence)
{
$word = explode (' ', $sentence);
$count = count($word);
return $count;
}
$input = readline('Enter some words: ');
$count = w ($input);

echo 'There are words in total of: ' . $count;

?>





