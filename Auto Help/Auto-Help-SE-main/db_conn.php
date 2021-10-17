<?php

$sname= "localhost";
$unmae= "id17056886_mariaberlianayapputri";
$password = "M4ri41234567890!";

$db_name = "id17056886_test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}