<?php
// backend/add_house.php
include '../db_connection.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$location = $_POST['location'];
$image_url = $_POST['image_url'];

$sql = "INSERT INTO houses (title, description, price, location, image_url) VALUES ('$title', '$description', '$price', '$location', '$image_url')";

if ($conn->query($sql) === TRUE) {
    echo "New house added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
