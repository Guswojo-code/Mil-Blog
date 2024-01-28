<?php
    $servername = "localhost";
    $username = "root";
    $password = "zpsCLUDuxGq877uJ";
    $database = "mil-blog";
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>