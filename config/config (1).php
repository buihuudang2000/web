<?php
session_start();
define("DB_HOST", "sql12.freemysqlhosting.net");
define("DB_USER", "sql12353211");
define("DB_PASS", "VIcgBALTKC");
define("DB_NAME", "sql12353211");
$con = mysqli_connect("fdb23.awardspace.net", "3502167_foodcourtdb", "Xxt]jdoxX1", "3502167_foodcourtdb");


// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>