<?php
echo "Give a number you want to multiply\n";
$number1 = rtrim(fgets(STDIN));
echo "Give a number you want to multiply it with\n";
$number2 = rtrim(fgets(STDIN));
$number3 = $number1 * $number2;
echo $number1 . " multiplied by " . $number2 . " is " . $number3;
?>