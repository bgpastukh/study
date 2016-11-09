<?php

$uploadDir = "/opt/lampp/htdocs/study/functions_forms_tasks/6/Gallery/";
$uploadFile = $uploadDir . basename($_FILES["userfile"]["name"]);

move_uploaded_file($_FILES["userfile"]["tmp_name"], $uploadFile);

header('Location: index.php');
exit();