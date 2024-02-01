<?php
//First anonymous function.
$anony1 = function ($a, $b){
    $sum = $a + $b;
    echo "Addition: $a + $b = " . $sum . '<br>';
};
#Second anonymous function.
$anony2 = function ($a, $b){
    $difference = $a - $b;
    echo "Subtraction: $a - $b = " . $difference . '<br>';
};

//Arrow Functions.
$arrow1 = fn ($a, $b) => $b !== 0 ? "Division : $a / $b = " . $a / $b : "ERROR! Impossible Division";
$arrow2 = fn($a, $b) => "Multiply with Arrow Function: ". $a * $b;

/*
A higher-order function is a function that takes one or more functions
as arguments and/or returns a function as its result.
In other words, a higher-order function treats functions as first-class citizens,
enabling them to be passed around and manipulated like any other data types.
The term "higher-order" reflects the fact that these functions operate
at a level above regular functions because they involve the manipulation of functions themselves.
 */

//Higher order function.
function callback($myFunction, $param1, $param2)
{
    echo $myFunction($param1, $param2) . '<br>';
}

echo '<h1>Lab 2</h1>';
//Addition using first anonymous function.
callback($anony1, 31, 23);
//Addition using second anonymous function.
callback($anony2, 15, 5);
//Error impossible division.
callback($arrow1, 15, 0);
//Division using first arrow function.
callback($arrow1, 15, 5);
//Multiplication using second arrow function.
callback($arrow2, 15, 5);



