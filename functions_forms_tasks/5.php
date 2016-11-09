<?php

$dir = "/opt/lampp/htdocs/study/functions_forms_tasks/1";
$keyword = ".html";

function show_files($directory, $keyword)
{
    $files = scandir($directory);
    $result = [];

    foreach ($files as $value)
    {
        if (strpos($value, $keyword))
            array_push($result, $value);
    }
    return $result;
}

echo "<pre>";
var_dump(show_files($dir, $keyword));
echo "</pre>";
