<?php
php_operators:
//these are used to perform operations to varables and value
//1.Arithmetic_op_
//2.Assignment_op_
//3.comparison_op_
//4.logical_op_

// 1.Arithmetic_op. Mathematical ops
//+addition_
//-subtracation
//* multiplication
/// division
//% Modulus - returns_a_reminder_of_a division op
//** exponential - power of number
$x = 5;
$y = 9;
$sum = $x + $y;
echo "$x + $y = $sum.<br>";

$diff = $y - $x;
echo "$y - sx = $diff <br>";

$mod = $y % $x;
echo " $y % $x = $mod<br>";

//2.Assigment ops
//= // assigment operator
//used to right a value to a variable
$name = "john";
$x = 5;
$y = 9;
$x = $x + $y;  //$x += $y
echo $x."<br>";
$x += $y ;
echo $y."<br>";

$x = 5;
$y = 9;
//$x % = $y;
$x = $x % $y;
echo $x;

//3.comparison_ops ; they return a boolean data type
//1. == equals
//2. === identical; the two values have the same datatype and the same value(equal)
//3. != not equal;
//4. <> not equal;
//5. !== not identical
//6.> greater_than
//7.< less than
//8.>= greater than or equal to
//9.<= less than or equal to
$age=18;
//var_dump(expression: $age == 21);
echo "<br>";
//var_dump(expression: $age === 18);

//Increment op
$i = 0;
$i++;

//4.logical_ops_










?>
