<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];

$link = mysqli_connect("localhost", "root", "479874", "students");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



$query = "INSERT INTO `students`.`users`(`first_name`, `last_name`, `phone`)
          VALUES ('$firstName', '$lastName', '$phone')";

mysqli_query($link, $query);

header('location:list.php');
