<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mlpms";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if ($con === false) {
    die('Connection Error: '.mysqli_connect_error());
}