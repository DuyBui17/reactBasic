<?php
    $servername = "localhost";
    $username = "root";
    $password =  "";
    $db = "myshop";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    if ($conn->connect_error){
        die("Connection failed: " . $connect_error); // die trả về với lí do bị lỗi
    }
?>