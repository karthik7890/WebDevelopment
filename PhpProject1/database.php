<?php

$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "Karthik_789";

$mysqli = new mysqli($host, $username, $password, $dbname);

if($mysqli->connect_errno) {
    die("connection-error : " . $mysqli->connect_error);
}

return $mysqli;