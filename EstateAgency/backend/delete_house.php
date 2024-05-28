<?php
// backend/delete_house.php
include '../db_connection.php';

$id = $_POST['id'];

$sql = "DELETE FROM houses WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "House deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
