<?php
$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "cakeshop"; 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM cakes";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Price: $" . $row["price"] . " - Description: " . $row["description"] . "<br>";
    }
} 
else 
{
    echo "0 results found.";
}
$conn->close();
?>
