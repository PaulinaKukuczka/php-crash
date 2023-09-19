<?php

$fruits = ['apple', 'orange', 'pear'];
//get length
echo count($fruits);

//search array
var_dump(in_array('apple', $fruits));


//add to aray
$fruits[] = 'grappe';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mango');

//remove from array
array_pop($fruits);
array_shift($fruits);
unset($fruits[2]); //remove also the key and value

print_r($fruits);

//chunk - kawałek, dzieli po 2 kawałki
$chunked_array = array_chunk($fruits, 2);
print_r($chunked_array);


//concat
$arr1 = [1,2,3];
$arr2 = [4,5,6];

$array3 = array_merge($arr1, $arr2);
print_r($array3);

$array4 = [...$arr1, ...$arr2];
print_r($array4);

//array_combine - creating key and values
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);
print_r($c);

$keys = array_keys($c);
print_r($keys);
$value = array_values($c);
print_r($value);

//changing keys to values and the oposite
$flipped = array_flip($c);
print_r($flipped);

$numbers = range(1, 20);
print_r($numbers);

//map, using values in each item in new array
$newNumbers = array_map(function($number) {
    return "Number $number";
}, $numbers);

print_r($newNumbers);

//filter
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
print_r($lessThan10);

//reduce
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);