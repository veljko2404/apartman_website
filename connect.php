<?php

$user = "grckanea_veljko";
$pass = "dino2019$";
$host = "208.82.114.172";
$db = "grckanea_apartman";

$conn = mysqli_connect($host, $user, $pass);

mysqli_select_db($conn, $db);

?>