<?php

$string = 'Hello World';

$string2 = '<script>alert(1)</script>';
echo htmlspecialchars($string2);

printf('<br> %s likes to %s', 'Paula', 'code');
printf('<br> 1+1=%d', 1+1);
