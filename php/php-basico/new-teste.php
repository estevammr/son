<?php

function check_palindrome($string) : bool {
    
    $string = str_replace(' ', '', $string);
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    $string = strtolower($string);
    $reverse = strrev($string);

    if ($string == $reverse) {
        return true;
    } 
    else {
        return false;
    }
}

$string = "ajshuiah";
echo check_palindrome($string);