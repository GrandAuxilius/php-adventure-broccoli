<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->

 <?php 
 
 $strings = explode(" ", readline("Enter your array as words separated by spaces: ")); 
 $longest = 0;   
 $longest_s = ''; 
   
 foreach ($strings as $word) 
 { 
  
 $len = strlen($word); 
       
 if ($len > $longest) 
{ 
 $longest = $len; 
 $longest_s = $word; 
  } 
 } 
   
 echo "The longest string is: " . $longest_s; 
   
 ?>