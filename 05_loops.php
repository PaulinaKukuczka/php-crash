<?php
/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for($x =0; $x <= 10; $x++) {
    echo 'Number ' . $x . '<br>';
}

$x = 1;

while($x <= 15) {
    echo 'While num ' . $x . '<br>';
    $x++;
}

$y = 200;
do {
    echo 'Do while' . $y . '<br>';
    $y = $y + 10;
} while ($y <= 300);

$posts = ['First one', 'Second one', 'Third one'];

for($r =0; $r < count($posts); $r++) {
    echo $posts[$r] . '<br>';
}

foreach($posts as $index => $post) {
    echo $index . ' - ' . $post . '<br>';
}

$people = [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'brad@gmail.com',
];

foreach($people as $key => $value) {
    echo "$key - $value<br>";
};