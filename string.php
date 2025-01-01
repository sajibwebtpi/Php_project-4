<?php


$strings = ["Hello","World","PHP","Programming"];

foreach($strings as $string){
    $vowels = ['a','e','i','o','u'];

    $vowelCount = 0;

    $strLower = strtolower($string);
    //  print_r($strLower."\n");
    foreach(str_split($strLower) as $char){
        if(in_array($char,$vowels)){
            $vowelCount++;
        }
    }
    $reversedString = strrev($string);
    echo "Original string: $string, Vowel Count: $vowelCount, Reversed String: $reversedString \n";

}