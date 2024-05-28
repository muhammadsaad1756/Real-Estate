<?php
// backend/get_houses.php
include '../db_connection.php';

$sql = "SELECT id, title, description, price, location, image_url FROM houses";
$result = $conn->query($sql);

$houses = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $houses[] = $row;
    }
}

echo json_encode($houses);
$conn->close();
?>
