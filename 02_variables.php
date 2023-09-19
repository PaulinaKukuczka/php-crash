<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Brad'; //string
echo $name;

$age = 24; //int
echo $age;

$has_kids = true;
echo '<br>';
echo $has_kids; //boolen
echo '<br>';
var_dump($has_kids);
$cash_on_hand = 20.75; //float
echo '<br>';
var_dump($cash_on_hand);

echo '<br>';
echo $name .  ' is ' . $age . ' years old';
echo '<br>';
echo "$name is $age years old";

echo '<br>';
$x = '5' + '5';
var_dump($x);


//const, never changing
echo '<br>';
define('HOST', 'localhost');
echo HOST;

define('DB_NAME', 'dev_db');
echo DB_NAME;