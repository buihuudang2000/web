<?php
session_start();
define("DB_HOST", "sql12.freemysqlhosting.net");
define("DB_USER", "sql12353211");
define("DB_PASS", "VIcgBALTKC");
define("DB_NAME", "sql12353211");
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>