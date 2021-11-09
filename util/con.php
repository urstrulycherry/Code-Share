<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "cs";
$con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);