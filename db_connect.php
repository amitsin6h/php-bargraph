<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PSWD', '');
define('DB_NAME', 'bargraph');

$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME) or die ("Unable to connect to database!!");

?>