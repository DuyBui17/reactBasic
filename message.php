<?php   
    require 'connect.php';

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $sql = "INSERT INTO message (name, phone, message) VALUES ('$name', '$phone', '$message')";
   
    if ($conn->query($sql) === TRUE)
    {
        header( "location: contact.php");
    }
    else
    {
        echo "Error: " . $sql . "<br> . $conn->error";
    }

    $conn->close();

?>