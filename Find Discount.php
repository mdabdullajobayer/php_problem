/*Problem Statement
Write a program to create a function that takes two arguments: the original price and the discount percentage as integers and returns the final price after the discount.

Input
The input consists of two integers: the original price and the discount.

Output
The output will print the final price after discount which will be a float number.

Constraints
N stands for any integer number.

0 ≤ |N| ≤ 100000*/

//Code
<?php
print "Enter price : ";
$price = fgets(STDIN);
print "Enter Discount Percentage :";
$dicsount = fgets(STDIN);
$disamout = $price * $dicsount / 100;
$dis = $price - $disamout;
print "discount :" . number_format($dis, 2);
