

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
    <form enctype="multipart/form-data" action="uploadfile.php" method="post">
        <input type="file" name="userfile">
        <input type="submit" name="Send">
    </form>

    <?php

    $images = scandir("/opt/lampp/htdocs/study/functions_forms_tasks/6/Gallery/");
    $dir = "Gallery/";
    echo "<table>";
    $i = 2;
    for ($k = 2; $k <= count($images); $k+=2)
    {
        echo "<tr>";
        while ($i < $k)
        {
            $img = '<img src='. $dir. $images[$i] .' width="100" height="100">';
            echo "<td>" . $img . "</td>";
            $i++;

        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>

