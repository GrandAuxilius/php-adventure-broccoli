<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->

<?php

$letter = readline('Enter a character: ');

$vowels = ['a','e', 'i', 'o', 'u'];

if (in_array($letter, $vowels)) {
    echo $letter . ' is a vowel';

}else{

    echo $letter . ' is a consonant';
}


?>