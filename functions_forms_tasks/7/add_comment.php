<?php

require "index.php";

array_push($text, $_POST['comment']);

$fp = fopen ("file.txt", "wb");

foreach ($text as $value)
{
    fwrite($fp, trim($value) . "\r\n");
}

fclose($fp);