<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "mathappe_mutia";

$link = mysqli_connect($host, $user, $pass, $db);

if (!$link) {
    die("Database tidak dapat terhubung: " . mysqli_connect_error());
}
