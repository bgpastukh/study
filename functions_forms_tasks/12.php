<?php

function format_string($string)
{
    $array = explode(". ", $string);
    $array[count($array)-1] = mb_substr($array[count($array)-1], 0, -1);
    return implode(". ", array_reverse($array)) . ".";
}

echo format_string("А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.");
