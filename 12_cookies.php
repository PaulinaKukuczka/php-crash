<?php


//set cookie
//ilość sekund jednego dnia 86400
setcookie('name', 'Paula', time() + 86400);

if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

//get set and remove in the same time
setcookie('name', '', time() - 86400);

