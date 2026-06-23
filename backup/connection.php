<?php
$servername = "localhost";   // ✅ use localhost for XAMPP
$username   = "root";        // ✅ default user
$password   = "";            // ✅ empty unless you set one in phpMyAdmin
$dbname     = "edoc";        // ✅ must match your database name

$database = new mysqli($servername, $username, $password, $dbname);

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}
?>
