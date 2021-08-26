<?php
// ternary operator

$n = 10;

// $foo = (10 == $n) ? "ten" : "A number";
$foo = (10 == $n) ? "ten" : ((12 == $n) ? "twelve" : "A number");
echo $foo;
echo "\n";

if ($n % 5 ==0) {
    echo "even numbr";
} else {
    echo "odd numbr";
}
echo "\n";

$result = ($n % 2 ==0) ? "{$n} is even numbr" : "{$n} is odd numbr";
echo $result;
echo "\n";

$foo = 5;
// $bar = ($foo == 1) ? "1" : "a number";
$bar = ($foo == 1) ? "1" : (($foo == 2) ? "two" : (($foo == 5) ? "five" : "other"));
echo $bar; 

// $foo = 1;
// $bar = ( $foo == 1 ) ? "1" : (( $foo == 2 ) ? "2" : "other");
// echo $bar;