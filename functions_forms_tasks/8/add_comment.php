<?php

require "index.php";

$bannedWords = ['word', 'otherword'];
$newComment = $_POST['comment'];

foreach ($bannedWords as $value) {
    if (strpos($newComment, $value))
        exit("Некорректный комментарий");
}

array_push($text, $newComment);

$fp = fopen ("file.txt", "wb");

foreach ($text as $value)
{
    fwrite($fp, trim($value) . "\r\n");
}

fclose($fp);