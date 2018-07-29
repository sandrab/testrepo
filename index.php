<?php
/*
 * This is the index.php.
 */

/**
 * Does barBaz things.
*/
function barBaz(){
    echo 'I am barBaz.';
}

// Cal barBaz.
barBaz();

/**
 * Does foo things.
 * @return void
*/
function foo(){
	echo 'This is a message from foo().';
}

// Call foo.
foo();
