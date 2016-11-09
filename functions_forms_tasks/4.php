<?php

$dir = "/opt/lampp/htdocs/study/functions_forms_tasks/1";

function show_files($dir)
{
    return scandir($dir);
}
echo "<pre>";
var_dump(show_files($dir));
echo "<pre>";
