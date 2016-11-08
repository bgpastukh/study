<?php

$text = file_get_contents("file.txt");
$result = [];
$n = $_GET["number"];
$text = iconv("UTF-8", "windows-1251", $text);

$textArray = explode(" ", $text);

foreach($textArray as $value)
{
	if (strlen($value) < $n )
	{
		array_push($result, $value);
	}	
}

$result = implode(" ", $result);
$result = iconv("windows-1251", "UTF-8", $result);
file_put_contents("file.txt", $result);

