<?php

function format_string($string)
{
    $array = explode(". ", $string);
    $result = [];
    foreach ($array as $value)
    {
        $value = mb_strtoupper(mb_substr($value, 0, 1)) . mb_substr($value, 1);
        array_push($result, $value);
    }
    $returnStr = implode(". ", $result);
    return $returnStr;
}

echo format_string("а васька слушает да ест. а воз и ныне там.");
