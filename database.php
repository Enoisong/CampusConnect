<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "CampusConnect";

// Establish a connection to PostgreSQL
$conn = pg_connect("host=$hostName dbname=$dbName user=$dbUser password=$dbPassword");

if (!$conn) {
    die("Something went wrong;");
}
?>
