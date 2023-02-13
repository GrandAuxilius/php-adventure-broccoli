<!-- 
    Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
-->

<?php

$Length = readline('Please enter the desired length of your password: ');
$keys = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()'; 
$Rpassword = ''; 


for ($i = 0; $i < $Length; $i++) { 
    $Rpassword .= $keys[mt_rand(0, strlen($keys) - 1)];
}

echo 'Your Random Password: ' . $Rpassword; 

?>














