<?php
/*
 * This is the index.php.
 */

function barBaz(){
    echo 'I am barBaz.';
}

/**
 * Does foo things.
 * @return void
*/
function foo(){
	echo 'This is a message from foo().';
}

// Call foo.
foo();
