<?php
// backend/update_house.php
include '../db_connection.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$location = $_POST['location'];
$image_url = $_POST['image_url'];

$sql = "UPDATE houses SET title='$title', description='$description', price='$price', location='$location', image_url='$image_url' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "House updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
