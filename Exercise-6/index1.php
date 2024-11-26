<?php
// Database configuration
$servername = "localhost";
$username = "root";  // Default MySQL username in XAMPP
$password = "";      // Default password is empty in XAMPP
$dbname = "cakeshop"; // Name of the database you created

// Create a connection using MySQLi
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data
$sql = "SELECT * FROM cakes";
$result = $conn->query($sql);

// Check if there are rows in the result
if ($result->num_rows > 0) {
    // Output data for each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Price: $" . $row["price"] . " - Description: " . $row["description"] . "<br>";
    }
} else {
    echo "0 results found.";
}

// Close the connection
$conn->close();
?>
