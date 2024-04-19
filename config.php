<?php
$server = "sql109.infinityfree.com";
$username = "if0_36384609";
$password = "F7mmEhagmegUyJb";
$db_name = "if0_36384609_kitty";

$conn = new mysqli($server, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$conn->autocommit(true);
?>