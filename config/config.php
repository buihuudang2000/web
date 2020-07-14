<?php
session_start();
define("DB_HOST", "fdb23.awardspace.net");
define("DB_USER", "3502167_foodcourtdb");
define("DB_PASS", "Xxt]jdoxX1");
define("DB_NAME", "3502167_foodcourtdb");
$con = mysqli_connect(DB_HOST,DB_USER ,DB_PASS ,DB_NAME );
mysqli_set_charset($con, "utf8");

// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>