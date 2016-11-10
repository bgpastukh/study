<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
    <label>Enter your text:<input type="textarea" name="text"></label>
    <input type="submit" value="send">
</form>
</body>
</html>

<?php

if ($_POST)
{
    $str = $_POST['text'];
    $array = explode(" ", $str);
    $res = 0;

    foreach ($array as $key => $value)
{
    if (strpos($str, $value) == strripos($str, $value))
    {
        $res++;
    }
}
    echo $res;
}