<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->

<?php

echo "Enter a string: ";
$string = trim(fgets(STDIN));
$char_freq = array();

for ($i=0; $i<strlen($string); $i++) {
$char = $string[$i];
if (array_key_exists($char, $char_freq)) {
$char_freq[$char]++;
} else {
$char_freq[$char] = 1; }
}

foreach ($char_freq as $char => $freq) {
  echo "$char: $freq\n";
}

?>