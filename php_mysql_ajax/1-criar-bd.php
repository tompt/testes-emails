<?php
require 'dados.php';
?>
<h1>criar bd</h1>
<?php
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE tese";
if (mysqli_query($conn, $sql)) {
    echo "Database tese created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>?>