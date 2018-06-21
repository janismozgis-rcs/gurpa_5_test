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
$someArray = ['zaz', 'vaz', 'gaz', 'bwm', true, 123];

foreach ($someArray as $key => $car) {
    echo $key . '<br>';
}