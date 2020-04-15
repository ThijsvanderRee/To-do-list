<?php
    $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // $sql = "SELECT * FROM boeken";
        // $result = $conn->query($sql);
?>
