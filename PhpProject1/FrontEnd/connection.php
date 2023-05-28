<?php

$sname= "localhost";
$unmae= "root";
$password = "Karthik_789";
$db_name = "login_db";

$con = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$con) {
	echo "Connection failed!";
}