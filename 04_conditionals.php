<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */

$t = date("H:i");

echo $t;
echo '<br>';
if($t < 12) {
    echo 'Good Morning';
} else if($t < 18) {
    echo 'Good Afternoon';
} else {
    echo 'Good Evening';
}

echo '<br>';
$posts = [];

// if(!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No Posts';
// }

$firstPost = !empty($post) ? $posts[0] : 'No posts <br>';
// $firstPost = $posts[0] ?? null; //możesz też tak to zapisać, gdy nie ma if else
echo $firstPost;

//switch

$favcolor = 'red';

switch($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is not red, green or blue';
}