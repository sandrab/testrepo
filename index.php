<?php
/*
 * This is the index.php.
 * Version: 1.0.2
 */

/**
 * Does barBaz things.
*/
function barBaz(){
    echo 'I will do barBaz. Oops, fix a major mistake here.';
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
 * Does myMy things.
*/
function myMy($myNumber){
    echo 'I will do myMy with: ' + $myNumber;
}

// Call myMy with paramteter 4.
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
