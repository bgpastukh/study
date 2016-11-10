<?php

$textArray = explode(" ", $_POST['text']);

function compare_length($a, $b)
{
    if (mb_strlen($a) == mb_strlen($b))
    {
        return 0;
    }
    return (mb_strlen($a) < mb_strlen($b)) ? 1 : -1;
}

function show_longest_words($array, $value_compare_func)
{
    usort($array, $value_compare_func);
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
    for ($i = 0; $i < 3; $i++)
    {
        echo $array[$i]."<br>";
    }
}

show_longest_words($textArray, "compare_length");