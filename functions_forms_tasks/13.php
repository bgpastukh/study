<?php

$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

function count_elements($string)
{
    $array = explode(" ", $string);
    $array = array_count_values($array);
    arsort($array);
    foreach ($array as $key => $value)
    {
        echo $key . "=" . $value . "<br>";
    }
}

count_elements($string);