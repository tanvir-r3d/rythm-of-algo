<?php

function justifyBrackets($string)
{
    $bracketPairs = [')' => '(', '}' => '{', ']' => '[', '>' => '<'];

    $lookup = [];

    for ($i = 0; $i < strlen($string); $i++) {

        if (array_key_exists($string[$i], $bracketPairs)) {
            $poped = array_pop($lookup);
            if ($bracketPairs[$string[$i]] != $poped) {
                return "Invalid";
            }
        } else {
            array_push($lookup, $string[$i]);
        }
    }

    return "Valid";
}

$str = "[{{()}}]";

echo justifyBrackets($str);
