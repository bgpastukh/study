<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div {
            border: 1px solid #eee;
            height:100px;
            width:250px;
            margin-bottom:10px;
        }
    </style>
</head>
<body>
<?php

$text = file("file.txt");

foreach($text as $value)
{
    echo "<div>" . $value . "</div>";
}
?>

<form action="add_comment.php" method="post">
    <label>Enter your comment:<input type="textarea" name="comment"></label>
    <input type="submit" value="send">
</form>
</body>
</html>