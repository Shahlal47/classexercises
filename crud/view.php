<?php



$id = $_GET['id'];

$link = mysqli_connect("localhost", "root", "479874", "students");

$query = "SELECT * FROM users WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);
?>

<a href="list.php">Go to Home</a>


