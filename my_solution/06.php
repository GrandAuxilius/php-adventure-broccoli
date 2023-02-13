<!-- 
    Write a program that outputs the first n triangular numbers.
 -->

 <?php
 
 $num = readline ('Enter a number: ');
 $counter = 0;
 $TN = 0;

 for  ($counter = 0; $counter < $num; $counter++) {
 $TN += $counter + 1;
 echo "$TN\n";
}

 ?>