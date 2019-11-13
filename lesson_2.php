<?php

//echo //basic way in php to out data
//print // basic way in php to out data
//print html code in php
echo "<p>hello ,welcome </p>";//every php statement must end with a semi colon
echo '<br>';
echo " hello am a php string";
echo '<br>';
//a string is a text/or a sequence of character inside a single or double quote
//INTEGER refers to a number
echo 200;
echo '<br>';
$x = 12;
echo '<br>';
$y = 20;
echo '<br>';
echo " i am $y years old";
echo '<br>';
echo "i am  " . $y . " years old";
echo '<br>';
//php_datatype;
//string: wrapped in between a single or double quote
//interger:whole numbers without decimal points
//float:decimal point numbers
//boolean:state:true , false
//STRING:
//a function is a block of code that does something specific
//function in php are written as : functionname()
//strlen().counts numners of characters in a string
echo strlen('hello world welcome');
echo '<br>';
$name = ' john ';
echo strlen($name);

//research on the following string:
//str_word count()
//strrev
//strpros
//str_replace

//php number
Integers and floating_numbers_
integers: is _a_whole number_without_decimal_point
- it_must_have_atleast_one_digital_can_be -ve or +ve_
functioin that_applay_to-integers:
is_int()
is_integer()
is_long()
//var dump() - returns the type of data i.e is it integer or string or
$x = 30;
var_dump ($X);
is_int($x); // returns a boolean data type if
//a number is integer, it is return 'true'
echo "<br>";
var_dump(is_int($x));

//Float_
//is a number with a decimal point
//is float(), returns. is true if a number is a decimal number



?>