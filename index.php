<?php
/*
 * This is the index.php.
 */

/**
 * Does barBaz things.
*/
function barBaz(){
    echo 'I will do barBaz.';
    $my_my = 'hello';
    echo "$my_my world";
}

// Cal barBaz.
barBaz();

/**
 * Does no_foo things.
 * @return void
*/
function no_foo(){
	echo 'I will do foo. Or maybe not.';
}

// Call no_foo.
no_foo();

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
