<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->

<?php
$string = readline ('Please enter a string: ');
$palindrome =strrev($string);
if ($string == $palindrome) {

echo "$string is a palindrome. ";
} else {
    
echo "$string is not a palindrome.";
}

?>









