<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "real-estate";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $rooms = $_POST['rooms'];
    $baths = $_POST['baths'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Insert into database
    $sql = "INSERT INTO houses (name, rooms, baths, price, description) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siids", $name, $rooms, $baths, $price, $description);

    if ($stmt->execute()) {
        // Redirect to the form page with a success message
        header("Location: property-grid.php?success=1");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
