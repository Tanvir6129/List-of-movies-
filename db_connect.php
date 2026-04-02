<?php
$mysqli = new mysqli("localhost", "2416471", "University1354", "db2416471");

if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}
?>