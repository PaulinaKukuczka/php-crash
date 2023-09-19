<?php

// how to cross by fatal error? try to save your code

function inverse($x) {
    if(!$x) {
        throw new Exception('Division by zero');

    }
    return 1/$x;

}


try {
    echo inverse(5);
    echo inverse(0);

} catch(Exception $e) {
    echo 'Caught Exception', $e->getMessage(), ' ';
} finally {
    echo 'First Finally <br>';
}


try {
    echo inverse(5);
    echo inverse(0);

} catch(Exception $e) {
    echo 'Caught Exception', $e->getMessage(), ' ';
} finally {
    echo 'Second Finally <br>';
}

echo 'Hello World!';