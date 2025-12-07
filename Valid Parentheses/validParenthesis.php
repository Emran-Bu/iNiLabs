<?php

function parenthesesValidationCheck($b) {
    $arr = [];
    $parentheses = [
        ')' => '(',
        '}' => '{',
        ']' => '['
    ];

    $brackets = str_split($b);
    foreach ($brackets as $bracket) {
        if (isset($parentheses[$bracket])) {
            $pop = array_pop($arr);
            if ($pop !== $parentheses[$bracket]) {
                return false;
            }
        } else {
            $arr[] = $bracket;
        }
    }
    return empty($arr);
}

var_dump(parenthesesValidationCheck("(){}[]"));  // true
echo "<br>";
var_dump(parenthesesValidationCheck("([)]"));    // false

