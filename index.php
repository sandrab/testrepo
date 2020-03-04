<?php
/*
 * This is the index.php.
 */

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
 * Does myMy things.
*/
function myMy($myNumber){
    if ( $myNumber <= 0 ) return;
    echo 'I will do myMy with: ' . $myNumber;
}

// Call myMy with parameter 4.
myMy(4);

/**
 * Does fooBar things.
 * @return void
*/
function fooBar(){
    echo 'I will do fooBar.';
}

// Call fooBar.
fooBar();
