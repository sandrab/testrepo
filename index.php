<?php
/*
 * This is the index.php.
 */

/**
 * Does barBaz things.
*/
function barBaz(){
    echo 'I will do barBaz.';
}

// Cal barBaz.
barBaz();

/**
 * Does foo things.
 * @return void
*/
function foo(){
	echo 'I will do foo.';
}

// Call foo.
foo();

/**
 * Does fooBar things.
 * @return void
*/
function fooBar(){
    echo 'I will do fooBar.';
}

// Call fooBar.
fooBar();
