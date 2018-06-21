<?php

$someInt = 123; //integer
$someDecimanNumber = 3.14; //float
$someText = "text"; // string '' / ""
$someBool = true; // bool
$someNull = null; // null

$someArray = ['zaz', 'vaz', 'gaz', 'bwm', true, 123];
$somePerson = [
    'name' => 'Johnny',
    'age' => 18
];
$bunchOfPeople = [
    10 => [
        'name' => 'Johnny',
        'age' => 18
    ],
    11 => [
        'name' => 'Billy',
        'age' => 19
    ]
];
$someObject = new stdClass();

// +
// -
// /
// *
// %

// && || 
// >
// <
// >=
// <=
// ==
// !=
// ===
// !==
$someArray = [1 => 'zaz', 10 => 'vaz', 'foo' => 'gaz', 'bwm', true, 123];

foreach ($someArray as $key => $car) {
    // echo $key . '<br>';
}

// for ($i=0; $i < 25; $i++) { 
//     $output = '';
//     if ($i % 2 == 0) {
//         $output = 'foo ';
//     }
//     if ($i % 3 == 0) {
//         $output .= 'bar';
//     }
//     if (!$output) {
//         $output = $i;
//     }
//     echo $output . '<br>';
// }

// skaitam no 0 - 25
// ja skaitlis dalās ar 2 bez atlikuma, izvadam vārdu "fiz"
// ja skaitlis dalās ar 3 bez atlikuma, izvadam vārdu "baz"
// ja ne ar vienu, tad izvadam skaitli

// fiz baz
// 1
// fiz
// baz
// fiz
// 5
// ...

// function someFunction($first, $second) {
//     return $first + $second;
// }
// echo someFunction(1, 4);    
// $foo = 'foo';
// $foo = ' bar';
// echo $foo . " bar";

$i = 123;
$i++;
echo $i;