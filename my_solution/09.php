<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->

<?php

$inputPhrase = readline('Please enter a sentence: ');
$outputPhrase = d ($inputPhrase);
echo $outputPhrase;

function d ($phrase)

{
$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$phrase = str_replace($vowels, '', $phrase);
return $phrase;

}


?>